
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="my-5"><?= $titulo ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="service-page" class="pages service-page">    
    <div class="container">

        <section id="blog-full-width" class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <article class="px-5 p-0-movil">
                            <div class="blog-post-image">
                                <img class="img-responsive w-100" src="<?= load_img_url($image_url); ?>" alt="" />
                            </div>
                            <div class="blog-content mt-5">
                                <h2 class="blogpost-title"><?= $titulo ?></h2>
                                <div class="blog-meta">
                                    <?= $Fecha ?>
                                </div>
                                <p class="text-justify" style="line-height: 28px;">
                                    <?= $descripcion ?>
                                </p>
                            </div>
                            
                        </article>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                                <div class="author widget">
                                    <img class="img-responsive" src="<?= load_img_url('images/logo_2.jpg'); ?>" style="width: 70%; margin: auto;">
                                    <div class="author-body text-center">
                                        <div class="author-bio mt-4 pt-1 mb-0 text-muted">
                                            <h3 class="mt-0"><small class="font-14"><i>Autor</i></small><br><?= $usuario ?></h3>
                                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt magnam asperiores consectetur, corporis ullam impedit.</p>-->
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="row" id="divPadreNoticias">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>    

    </div>
</section>
