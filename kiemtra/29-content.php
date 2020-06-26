<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-29">
    <div class="container">
        <!-- Task Menu -->
        <div class="nav-menu">
            <!-- Logo -->
            <div class="logo">
                <img src="images/chaitan-logo.jpg" alt="">
            </div>

            <!-- List Menu -->
            <div class="menu">
                <ul>
                    <!-- List Main menu -->
                    <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">About us<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">Project<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">Blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">Contacts</a></li>
                    <li>
                        <a href="#">Pages<i class="fa fa-angle-down" aria-hidden="true"></i></a>

                        <!-- List Sub menu -->
                        <ul class="sub-menu">
                            <div class="row">
                                <!-- Child menu -->
                                <div class="col-md-3">
                                    <ul>
                                        <!-- Sub Menu -->
                                        <li><a href="#">Typography<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub">
                                                <!-- List Menu Children -->
                                                <li><a href=""><i class="fa fa-header" aria-hidden="true"></i>Headers</a></li>
                                                <li><a href=""><i class="fa fa-align-left" aria-hidden="true"></i>Text</a></li>
                                                <li><a href=""><i class="fa fa-columns" aria-hidden="true"></i>Text Columns</a></li>
                                                <li><a href=""><i class="fa fa-table" aria-hidden="true"></i>Table</a></li>
                                                <li><a href=""><i class="fa fa-arrows-h" aria-hidden="true"></i>Separators</a></li>
                                                <!-- End List Menu Children -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Child menu -->
                                <div class="col-md-3">  
                                    <ul>
                                        <li><a href="#">Form Elements<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub">
                                                <!-- List Menu Children -->
                                                <li><a href=""><i class="fa fa-mouse-pointer" aria-hidden="true"></i>Buttons</a></li>
                                                <li><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Form</a></li>
                                                <!-- End List Menu Children -->
                                            </ul>
                                        </li>   
                                    </ul>
                                </div>

                                <!-- Child menu -->
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="#">Shortcodes<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub">
                                                <!-- List Menu Children -->
                                                <li><a href=""><i class="fa fa-list" aria-hidden="true"></i>Accodions</a></li>
                                                <li><a href=""><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Alerts</a></li>
                                                <li><a href=""><i class="fa fa-bars" aria-hidden="true"></i>Tabs</a></li>
                                                <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i>Shortcodes</a></li>
                                                <!-- End List Menu Children -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Child menu -->
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="#">List<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                            <ul class="sub">
                                                <!-- List Menu Children -->
                                                <li><a href=""><i class="fa fa-gratipay" aria-hidden="true"></i>Icons</a></li>
                                                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i>List And Social Icons</a></li>
                                                <!-- End List Menu Children -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </ul>
                        <!-- End List Sub menu -->
                    </li>
                    <!-- End List Main menu -->
                </ul>
            </div>
            <!-- End List Menu -->
        </div>
        <!-- End Task Menu -->
    </div>
</div>