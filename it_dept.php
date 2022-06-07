<?php
include 'admin/db_connect.php';
?>
<style>
    #portfolio .img-fluid {
        width: calc(100%);
        height: 30vh;
        z-index: -1;
        position: relative;
        padding: 1em;
    }

    .alumni-list {
        cursor: pointer;
        border: unset;
        flex-direction: inherit;
    }

    .alumni-img {
        width: calc(30%);
        max-height: 30vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .alumni-list .card-body {
        width: calc(70%);
    }

    .alumni-img img {
        border-radius: 100%;
        max-height: calc(100%);
        max-width: calc(100%);
    }

    span.hightlight {
        background: yellow;
    }

    .carousel,
    .carousel-inner,
    .carousel-item {
        min-height: calc(100%)
    }

    header.masthead,
    header.masthead:before {
        min-height: 50vh !important;
        height: 50vh !important
    }

    .row-items {
        position: relative;
    }

    .card-left {
        left: 0;
    }

    .card-right {
        right: 0;
    }

    .rtl {
        direction: rtl;
    }

    .alumni-text {
        justify-content: center;
        align-items: center;
    }

    .masthead {
        min-height: 23vh !important;
        height: 23vh !important;
    }

    .masthead:before {
        min-height: 23vh !important;
        height: 23vh !important;
    }

    .alumni-list p {
        margin: unset;
    }
</style>
<header class="masthead">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end mb-4 page-title">
                <i>
                    <h3 class="text-white">BBSUL-Alumni IT Department!!</h3><i>
                        <hr class="divider my-4" />

                        <div class="col-md-12 mb-2 justify-content-center">
                        </div>
            </div>

        </div>
    </div>
</header>
<div class="container">

</div>
</div>
<div class="container-fluid mt-3 pt-2">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-center">
                    <h4><b> IT Batches</b></h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Batch List</th>
                                <th class="text-center">Action</th>

                                <!-- <th class="text-center">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $connection = mysqli_connect("localhost", "root", "");
                            $db = mysqli_select_db($connection, "alumni_db");
                            $query = "select * from it_batch ";
                            $query_run = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_assoc($query_run)) {
                                extract($row)


                            ?>
                                <tr>
                                    <td class="text-center">
                                        <?php echo $it_batch_id ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo $batch_name ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="it_batch_alumni.php?bid=<?php echo $it_batch_id?>">
                                            View <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // $('.card.alumni-list').click(function(){
    //     location.href = "index.php?page=view_alumni&id="+$(this).attr('data-id')
    // })
    //     $('.book-alumni').click(function(){
    //         uni_modal("Submit Booking Request","booking.php?alumni_id="+$(this).attr('data-id'))
    //     })
    //     $('.alumni-img img').click(function(){
    //         viewer_modal($(this).attr('src'))
    //     })
    //      $('#filter').keypress(function(e){
    //     if(e.which == 13)
    //         $('#search').trigger('click')
    //    })
    //     $('#search').click(function(){
    //         var txt = $('#filter').val()
    //         start_load()
    //         if(txt == ''){
    //         $('.item').show()
    //         end_load()
    //         return false;
    //         }
    //         $('.item').each(function(){
    //             var content = "";
    //             $(this).find(".filter-txt").each(function(){
    //                 content += ' '+$(this).text()
    //             })
    //             if((content.toLowerCase()).includes(txt.toLowerCase()) == true){
    //                 $(this).toggle(true)
    //             }else{
    //                 $(this).toggle(false)
    //             }
    //         })
    //         end_load()
    //     })
</script>