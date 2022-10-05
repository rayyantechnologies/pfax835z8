
    <!-- Hero Start -->
    <section class="bg-half-130 d-table w-100" data-jarallax='{"speed": 0.5}' style="background: url('<?=base_url('img/bg7.jpg')?>');">
        <div class="bg-overlay bg-gradient-overlay-2"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <!-- <p class="text-white-50 para-desc mx-auto mb-0">What we offer?</p> -->
                        <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark"><?=$blog->title?></h5>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        </div><!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 mt-4 pt-2">
                    <?=$blog->content?>
                    <!-- <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                        <div class="card-body content p-0">
                            <div class="p-4">
                                <a href="blog/<?=$blog->id?>" class="h5 title text-dark d-block mb-0"><?=$blog->title?></a>
                                <p class="text-muted mt-2 mb-0"><?=excerpt($blog->content)?></p>
                            </div>
                            <div class="post-meta d-flex justify-content-between p-4 border-top">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i><?=$blog->replies->totalItems?></a></li>
                                </ul>
                                <a href="javascript:void(0)" class="text-muted readmore"><i class="uil uil-calender"></i> <?= dater($blog->updated) ?> </a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section><!--end section-->
    <!-- End -->

<?php
function dater($val)
{
    $date = new DateTime($val);
    return $date->format('d-M-Y');
}

function excerpt($val)
{
    return substr($val, 0, 75).'...';
}

?>
