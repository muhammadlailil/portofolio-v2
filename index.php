<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Lailil Mahfud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="">
            </a>
        </div>
    </nav>
    <div class="main__content">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="profile">
                        <div class="user_profile_image">
                            <img src="img/mahfud_2.jpg" alt="">
                        </div>
                        <h3 class="name">
                            Lailil Mahfud
                            <img src="img/verif.png" class="verif" alt="">
                        </h3>
                        <p class="username">@LaililMahfud</p>
                        <p class="bio">Web Engginer</p>
                        <div class="d-flex">
                            <a href="https://id.linkedin.com/in/lailil-mahfud-4041791aa" target="_blank" class="btn btn-primary">Linkedin</a>
                            <a href="mailto:laililmahvut@gmail.com" target="_blank" class="btn btn-light">E-Mail</a>
                            <a href="https://drive.google.com/file/d/12jMnuvt45aNt_2mIsa5NvF4UZBz38G-z/view" target="_blank" class="btn btn-light">CV</a>
                        </div>
                    </div>
                    <div class="profile_information">
                        <p class="about">
                            Hi, I'm Lailil Mahfud.
                            I am an IT Professional who has experience in technology and web application development.
                            I am also very interested in learning new things related to the development of the IT world. I'm also good at
                            <a href="javascript:;">@Laravel</a>
                            <a href="javascript:;">@Spring</a>
                            <a href="javascript:;">@Java</a>
                            <a href="javascript:;">@JavaScript</a>
                            <a href="javascript:;">@Node.js</a>
                            <a href="javascript:;">@Vue.js</a>
                            <a href="javascript:;">@PHP</a>
                        </p>
                        <table>
                            <tr>
                                <th>Email</th>
                                <td>: <a href="mailto:laililmahvut@gmail.com" target="_blank">laililmahvut@gmail.com</a></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>: <a href="https://wa.me/081229744559?text=Hello, Lailil Mahfud" target="_blank">+62 812 2974 4559</a></td>
                            </tr>
                            <tr>
                                <th>Github</th>
                                <td>: <a href="https://github.com/muhammadlailil" target="_blank">@Lailil Mahfud</a></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>: Blingoh, Donorojo, Jepara, Jawa Tengah, Indonesia</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php
                    $skils = file_get_contents('data/skil.json');
                    $skilsArray = json_decode($skils, true);
                ?>
                <div class="col-sm-9">
                    <div class="swiperSkils">
                        <div class="header_list_info swiper-wrapper">
                            <?php
                                foreach ($skilsArray as $skl) {
                            ?>
                            <div class="item swiper-slide">
                                <div class="center-item text-center">
                                    <div class="image_preview">
                                        <img src="<?php echo $skl['icon'] ?>" alt="">
                                    </div>
                                    <span><?php echo $skl['name'] ?></span>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <!-- <div class="swiper_arrow_button">
                            <div class="swiper_button_next">
                                <img src="img/right-arrow.png" alt="">
                            </div>
                            <div class="swiper_button_prev">
                                <img src="img/left-arrow.png" alt="">
                            </div>
                        </div> -->
                    </div>

                    <div class="portofolio_list">
                        <div class="header_menu d-flex">
                            <a href="javascript:;" class="text-center">
                                <img src="img/grid-icon.png" alt="">
                                PORTOFOLIO
                            </a>
                            <a href="javascript:;" class="text-center contact-menu">
                                <img src="img/contact-book.png" alt="">
                                CONTACT
                            </a>
                        </div>

                        <?php
                            $porto = file_get_contents('data/portofolio.json');
                            $portoArray = json_decode($porto, true);
                        ?>
                        <textarea id="listOfPortofolio" class="d-none"><?php echo $porto; ?></textarea>
                        <div class="portofolio_content row">
                            <?php
                                foreach ($portoArray as $po) {
                            ?>
                            <div class="col-sm-4">
                                <div class="portofolio_item">
                                    <div class="image">
                                        <img src="<?php echo $po['bg'] ?>" alt="">
                                        <div class="overlay" onclick="showDetailPortofolio(<?php echo $po['id']?>)">
                                            <a href="javascript:;" class="badge text-white bg-primary">Detail</a>
                                        </div>
                                    </div>
                                    <p class="project_name"><?php echo $po['name'] ?></p>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalDetailPortofolio" tabindex="-1" aria-labelledby="modalDetailPortofolioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="project_detail_image">
                                <img src="img/porto/yelow/main.png" alt="" width="100%">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="project_detail_information"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
