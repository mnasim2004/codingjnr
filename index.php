<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Fixed typo in 'width' -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="/codenjr/script.js"></script>

</head>

<body>
    <header>
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
            <div class="">
                <a href="/codenjr/index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none ">
                    <img src="/codenjr/img/logo.png" alt="Logo" class="logo" height="50">
                </a>
            </div>
            <div class="direction_main">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <?php
                        $pages = array(
                            "class12.php" => "Class 12",
                            "web_dev.php" => "Web Development",
                            "html.php" => "HTML"
                            // Add more pages as needed with their respective titles
                        );

                        $currentPage = basename($_SERVER['PHP_SELF']);

                        foreach ($pages as $page => $title) {
                            if ($page == $currentPage) {
                                echo "<li class='active direction' aria-current='page'>$title</li>";
                            } else {
                                echo "<li class='direction'><a href='$page' class='direction'>$title</a></li>";
                            }
                        }
                        ?>
                    </ol>
                </nav>
            </div>
            <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form> -->

            <div class="dropdown text-end user_icon">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle user_txt" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/user.png" alt="mdo" width="32" height="32" class="rounded-circle ">Vikas
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="flex-shrink-0 p-3 sidebar" style="width: 280px; height:auto;">
        <ul class="list-unstyled ps-0">
            <?php
            // Define an array for each section with the title and its corresponding items
            $sections = array(
                array(
                    "title" => "Introduction to HTML",
                    "id" => "introduction-to-html-content",
                    "items" => array()
                ),
                array(
                    "title" => "Adding Images Videos and Tables",
                    "id" => "adding-images-videos-and-tables-content",
                    "items" => array(
                        array("text" => "Video: Adding Images", "icon" => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445" />
                                </svg>'),
                        array("text" => "PPT: Adding Images", "icon" => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-ppt" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m2.817-1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H4.15V12.48h.66q.327 0 .512.181.185.183.185.522m2.767-.67v3.336H7.48v-3.337H6.346v-.662h3.065v.662z" />
                                </svg>'),
                        array("text" => "Notes: Adding Images", "icon" => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                                </svg>'),
                        array("text" => "Quiz: Adding Images", "icon" => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14" />
                                </svg>')
                    )
                ),
                array(
                    "title" => "Lists",
                    "id" => "lists-content",
                    "items" => array(
                        // Add list items for this section
                    )
                ),
                array(
                    "title" => "Hyperlinks",
                    "id" => "hyperlinks-content",
                    "items" => array(
                        // Add list items for this section
                    )
                ),
                array(
                    "title" => "Iframes",
                    "id" => "iframes-content",
                    "items" => array(
                        // Add list items for this section
                    )
                )
            );

            // Loop through each section and generate list items
            foreach ($sections as $section) {
                echo '<li class="mb-1">';
                echo '<button onclick=showDiv("' . $section["id"] . '") class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed side_txtm dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#' . str_replace(' ', '-', strtolower($section["title"])) . '-collapse" aria-expanded="false">';
                echo $section["title"];
                echo '</button>';
                echo '<div class="collapse" id="' . str_replace(' ', '-', strtolower($section["title"])) . '-collapse">';
                echo '<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">';
                foreach ($section["items"] as $item) {
                    echo '<li>';
                    echo '<button class="toggle-item d-inline-flex align-items-center rounded border-0 collapsed side_txts">';
                    echo $item["icon"];
                    echo '<span>' . $item["text"] . '</span>';
                    echo '</button>';
                    echo '</li>';
                }
                echo '</ul>';
                echo '</div>';
                echo '</li>';
                echo '<li class="border-top my-3"></li>';
            }
            ?>
        </ul>
    </div>
    <div class="content" id="introduction-to-html-content">This is div 1 content.</div>
    <div class="content" id="adding-images-videos-and-tables-content" style="display: block;">
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Zcv1aSlfknU" frameborder="0" allowfullscreen></iframe>
        </div>
        <br>
        <div class="pdf-container">
            <iframe src="data/html.pdf" width="100%" height="100%" frameborder="0"></iframe>
        </div>


        <div class="w3-col l10 m12" id="main">
            <div id="mainLeaderboard" style="overflow:hidden;">
                <div id="adngin-main_leaderboard-0"></div>
            </div>
            <h1 class="user_txt" style="padding-top: 10px" ;>HTML<span class="user_txt" style="padding-top: 10px" ;>IMAGES</span></h1>
            <div class="w3-clear nextprev">
                <a class="left w3-btn" href="php_string_modify.asp">❮ Previous</a>
                <a class="right w3-btn" href="php_string_slicing.asp">Next ❯</a>
            </div>
            <hr>
            <!-- <h2>String Concatenation</h2> -->

            <p>Images can improve the design and appearance of a web page.</p>
            <hr>
            <div class="imgc">
                <img class="imgp" src="img/pic_trulli.png " alt="Italian Trulli">
                <img class="imgp" src="img/img_girl.png " alt="Girl in a jacket">
                <img class="imgp" src="img/img_chania.png " alt="Flower in Chania">
            </div>
            <div class="w3-example">
                <h3>Example</h3>
                <pre class="notranslate w3-white language-html" tabindex="0"><code class="language-html">&lt;img src="img/pic_trulli.png" alt="Italian Trulli"&gt;</code></pre>
                <a target="_blank" class="w3-btn w3-margin-bottom" href="phptryit.asp?filename=tryphp_string_concatenation">Try it Yourself »</a>
            </div>


            <div class="w3-example">
                <h3>Example</h3>
                <pre class="notranslate w3-white language-html" tabindex="0"><code class="language-html">&lt;img src="img/img_girl.png" alt="Girl in a jacket"&gt;</code></pre>
                <a target="_blank" class="w3-btn w3-margin-bottom" href="phptryit.asp?filename=tryphp_string_concatenation2">Try it Yourself »</a>
            </div>


            <div class="w3-example">
                <h3>Example</h3>
                <pre class="notranslate w3-white language-html" tabindex="0"><code class="language-html">&lt;img src="img/img_chania.png" alt="Flower in Chania"&gt;</code></pre>
                <a target="_blank" class="w3-btn w3-margin-bottom" href="phptryit.asp?filename=tryphp_string_concatenation3">Try it Yourself »</a>
            </div>




        </div>

    </div>

    </div>
    <div class="content" id="lists-content">This is div 3 content.</div>
    <div class="content" id="hyperlinks-content">This is div 3 content.</div>
    <div class="content" id="iframes-content">This is div 3 content.</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function showDiv(divId) {
            // Get all divs with class 'content'
            var divs = document.querySelectorAll('.content');

            // Hide all divs
            divs.forEach(function(div) {
                div.style.display = 'none';
            });

            // Show the selected div
            var selectedDiv = document.getElementById(divId);
            if (selectedDiv) {
                selectedDiv.style.display = 'block';
            }
        }
    </script>
</body>

</html>