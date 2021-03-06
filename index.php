<!DOCTYPE html>
<html>
    
    <head>
    
        <title>iSLR</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
         <style>
             .navbar {
                    margin-bottom: 0;
                    border-radius: 0;
                    background-color: black;
                    color: #FFF;
                    padding: 1% 0;
                    font-size: 1.2em;
                    border: 0;
             }
             
             .navbar-brand {
                 float: left;
                 min-height: 45px;
                 padding: 0 15px 5px;
             }
             
             .navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus,  
             .navbar-inverse .navbar-nav .active a:hover {
                 color: #FFF;
                 background-color: black;
             }
             
             .item-active, .item {
                 background-color: black;
             }
             
             .slide {
                 margin-left: auto;
                 margin-right: auto;
             }
             
             .main-content {
                 
                 font-family: sans-serif;
                 padding-top: 2.5%;
                 padding-bottom: 20%;
                 margin-left: 35px;
                 margin-right: 35px;
                 background-color: white;
                 text-align: center;
             }
             
             .black-border {
                 background-color: black;
                 padding-top: 35px;
                 padding-bottom: 35px;
             }
             
             .container-fluid-text-center {
                 background-color: black;
                 text-align: center;
                 color: #FFF;
                 padding-bottom: 25px;
             }
             
             .main-title {
                 margin-bottom: 30px;
             }
             
             .button1 {
                 border-radius: 4px;
                 margin-bottom: 35px;
             }
             
             .identifier{
                 font-family: sans-serif;
                 margin: 0;
                 margin-left: 25%;
                 margin-right: 25%;
                 text-align: left;
             }
             
             .table-fill {
              background: white;
              border-radius:3px;
              border-collapse: collapse;
              height: 320px;
              margin: auto;
              max-width: 600px;
              padding:5px;
              width: 100%;
              box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
              animation: float 5s infinite;
            }

            th {
              color:#D5DDE5;;
              background:#1b1e24;
              border-bottom:4px solid #9ea7af;
              border-right: 1px solid #343a45;
              font-size:14px;
              font-weight: 100;
              padding:24px;
              text-align:left;
              text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
              vertical-align:middle;
            }

            th:first-child {
              border-top-left-radius:3px;
            }

            th:last-child {
              border-top-right-radius:3px;
              border-right:none;
            }

            tr {
              border-top: 1px solid #C1C3D1;
              border-bottom: 1px solid #C1C3D1;
              color:#666B85;
              font-size:10px;
              font-weight:normal;
              text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
            }

            tr:hover td {
              background:#4E5066;
              color:#FFFFFF;
              border-top: 1px solid #22262e;
            }

            tr:first-child {
              border-top:none;
            }

            tr:last-child {
              border-bottom:none;
            }

            tr:nth-child(odd) td {
              background:#EBEBEB;
            }

            tr:nth-child(odd):hover td {
              background:#4E5066;
            }

            tr:last-child td:first-child {
              border-bottom-left-radius:3px;
            }

            tr:last-child td:last-child {
              border-bottom-right-radius:3px;
            }

            td {
              background:#FFFFFF;
              padding:20px;
              text-align:left;
              vertical-align:middle;
              font-weight:300;
              font-size:12px;
              text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
              border-right: 1px solid #C1C3D1;
            }

            td:last-child {
              border-right: 0px;
            }

            th.text-left {
              text-align: left;
            }

            th.text-center {
              text-align: center;
            }

            th.text-right {
              text-align: right;
            }

            td.text-left {
              text-align: left;
            }

            td.text-center {
              text-align: center;
            }

            td.text-right {
              text-align: right;
            }

                
        </style>
        
    </head>
    
    
    <body>
        
        <nav class = "navbar navbar-inverse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
                        <span class = "icon-bar"> </span>
                        <span class = "icon-bar"> </span>
                        <span class = "icon-bar"> </span>
                    </button>
                    <a class = "navbar-brand" href = "index.php"> <img height= 100% src = "img/innopolis-logo.png"></a>
                </div>
                <div class = "collapse navbar-collapse" id = "myNavbar">
                    <ul class = "nav navbar-nav navbar-right">
                        <li class = "active"> <a href="index.php"> Home </a> </li>
                        <li> <a href="about.html"> About </a> </li>
                        <li> <a href="contact.html"> Contact </a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id = "myCarousel" class = "carousel slide" data-ride = "carousel">
            
                <ol class = "carousel-indicators">
                    <li data-target = "#myCarousel" data-slide-to = "0" class = "active"> </li>
                    <li data-target = "#myCarousel" data-slide-to = "1"> </li>
                    <li data-target = "#myCarousel" data-slide-to = "2"> </li>
                </ol>
            
                <div class = "carousel-inner" role = "listbox">
                    <div class = "item active">
                        <img class = "slide" src = "img/first.jpg" style="margin:0; background-size:cover; height: 325px; width:100%;">
                    </div>
                    <div class = "item">
                        <img class = "slide" src = "img/second.jpg" style="margin:0; background-size:cover; height: 325px; width:100%;">
                    </div>
                    <div class = "item">
                        <img class = "slide" src = "img/business-people-working-on-computer-web-header.jpg" 
                             style="margin:0; background-size:cover; height: 325px; width:100%;">
                    </div>
                </div>
                <a class = "left carousel-control" href = "#myCarousel" role = "button" data-slide = "prev">
                    <span class = "glyphicon glyphicon-chevron-left" aris-hidden = "true"> </span>
                    <span class = "sr-only"> Previous </span>
                </a>
                <a class = "right carousel-control" href = "#myCarousel" role = "button" data-slide = "next">
                    <span class = "glyphicon glyphicon-chevron-right" aris-hidden = "true"> </span>
                    <span class = "sr-only"> Next </span>
                </a>
        </div>
        
        <div class = "black-border">
            
            <div class = "main-content">

                <form name ="form1" method = "post" action="index.php">

                    <h1 class = "main-title"> <b> iSLR </b> </h1>

                    <input type = "text" name = "phrase" value = "">

                    <button class = "button1" type = "submit" name = "search" value = ""> 
                        
                        <img src="img/Button_15-512.png" width = "20px" height= "20px"> 
                    
                    </button>

                    <?php
                        
                        error_reporting(E_ALL ^ E_NOTICE); 
                        ob_flush();
                        ob_clean();

                    
                        function swap(&$a, &$b)
                        {
                            $c = $a;
                            $a = $b;
                            $b = $c;
                        }
                        
                        $doi_list = array();
                        $title_list = array();
                        $author_list = array();
                        $publication_list = array();
                        
                        # find all permutations of given keywords, search for them in title and abstract of all articles in the db 
                        function permute(&$array, $i, $n)
                        {
                            if($i == $n)
                            {
                                # we need expression appropriate for LIKE clause
                                $like = "%";
                                for($j = 0; $j < $n; $j++)
                                {
                                    $temp = $array[$j];
                                    $like = $like . str_replace(' ', '%', $temp, $count[$temp]);
                                    $like = $like . "%";
                                }
                                
                                $con=new mysqli("localhost","root","", "islr");
                                $query = "SELECT doi, title, author, publication
                                          FROM papers
                                          WHERE title LIKE '".$like."' OR abstract LIKE '".$like."'";
                                
                                $res = mysqli_query($con, $query);
                                
                                if($res)
                                {
                                    while($row = mysqli_fetch_array($res))
                                    {
                                        if(array_search($row[0], $GLOBALS['doi_list']) != NULL) continue; # paper already printed
                                        
                                        array_push($GLOBALS['doi_list'], $row[0]); 
                                        array_push($GLOBALS['title_list'], $row[1]);
                                        array_push($GLOBALS['author_list'], $row[2]);
                                        array_push($GLOBALS['publication_list'], $row[3]);
                                    }
                                }
                                return;
                            }
                            
                            for($j = $i; $j < $n; $j++)
                            {
                                swap($array[$i], $array[$j]);
                                permute($array, $i + 1, $n);
                                swap($array[$i], $array[$j]);
                            }
                        }
                    
                        
                        function Search($array)
                        {   
                            sort($array);
                            permute($array, 0, count($array));
                        }

                    
                        # separate the keywords based on syntax rules, function returns array of strings
                        function separate($keywords)
                        {
                            $keyword = '';
                            $array = array();
                            $n = strlen($keywords);
                            $i = 0;

                            while($i < $n)
                            {
                                if($keywords[$i] == ' ')  # separator, not important for query
                                {
                                    $i++;
                                    continue;
                                }

                                # next keyword is located between indices i and j
                                $j = $i;
                                while($j < $n)
                                {
                                    if($keywords[$j] == '"')  # by syntax rules this sign merges more keywords into one 
                                    {
                                        if($i != $j)  # end of the group of keywords
                                        {
                                            $j++;
                                            break;
                                        }
                                        else 
                                        {
                                            # don't include it in keyword
                                            $j++;
                                            continue;
                                        }
                                    }
                                    else if($keywords[$j] == ' ')  
                                    {
                                        # if there is no syntax for merged keywords this is the end of keyword
                                        if($keywords[$i] != '"') break;
                                    }
                                    $keyword .= $keywords[$j];
                                    $j++;
                                }

                                # push the keyword to array and make it suitable for next iteration
                                array_push($array, $keyword);
                                $keyword = "";
                                $i = $j;

                            }
                            return $array;

                        }
                        
                    
                        # store individual article into data base
                        function store($doi, $title, $author, $publication, $abstract)
                        {
                            $con=new mysqli("localhost","root","", "islr");
                            $query = "INSERT INTO papers
                                      VALUES ('$doi', '$title', '$author', '$publication', '$abstract')";   
                            $con->query($query);
                        }
                    
                    
                        # makes request and stores results in the data base 
                        function XploreAPI($query)
                        {
                            $url = "http://ieeexploreapi.ieee.org/api/v1/search/articles?apikey=456f9m7nsgtr8vdrs8aapyxx&format=json&max_records=25&start_record=1&sort_order=asc&sort_field=publication_title&article_title=" .$query. "&abstract=" .$query;
                            
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_URL, $url);
                            $result = curl_exec($ch);
                            curl_close($ch);

                            $obj = json_decode($result);
                            $n = $obj->total_records;
                            
                            # find all articles
                            for($i = 0; $i < $n; $i++)
                            {
                                $title = $obj->articles[$i]->title;
                                $author = $obj->articles[$i]->authors->authors[0]->full_name;
                                $conference = $obj->articles[$i]->publication_title;
                                $abstract = $obj->articles[$i]->abstract;
                                $doi = $obj->articles[$i]->doi;
                                # echo($title." <br> ".$author." <br> ".$conference." <br> ".$abstract." <br> ".$doi." <br> <br> ");
                                store($doi, $title, $author, $conference, $abstract);
                            }
                        }
                        
                    
                        function SpringerAPI($query)
                        {
                            $url = "http://api.springer.com/metadata/json?api_key=ac2cc2740c58bf970ca18f82fc874f69&q=" . $query. "&s=1&p=25";
                            
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_URL, $url);
                            $result = curl_exec($ch);
                            curl_close($ch);

                            $obj = json_decode($result);
                            
                            $n = $obj->result[0]->recordsDisplayed;
                            
                            for($i = 0; $i < $n; $i++)
                            {
                                $title = $obj->records[$i]->title;
                                $author = $obj->records[$i]->creators[0]->creator;
                                $publication = $obj->records[$i]->publicationName;
                                $abstract = $obj->records[$i]->abstract;
                                $doi = $obj->records[$i]->doi;
                                # echo($title." <br> ".$author." <br> ".$publication." <br> ".$abstract." <br> ".$doi." <br> <br> ");
                                store($doi, $title, $author, $publication, $abstract);
                            }
                        }
                    
                    
                        function split_keywords($array)
                        {
                            $n = count($array);
                            $answer = "";
                            for($i = 0; $i < $n; $i++)
                            {
                                $tmp = str_replace(' ', '+', $array[$i], $count[$array[$i]]);
                                $tmp = str_replace('@', '', $tmp, $count[$tmp]);
                                $answer = $answer . $tmp;
                                if($i < $n - 1) $answer = $answer . "+";
                            }
                            return $answer;
                        }
                    
                    
                        # return query format reqiured in ACM Digital Library
                        
                        function ACM_split_keywords($array)
                        {
                            $n = count($array);
                            $answer = "";
                            for($i = 0; $i < $n; $i++)
                            {
                                $tmp = str_replace(' ', '+', $array[$i], $count[$array[$i]]);
                                $tmp = str_replace('@', '', $tmp, $count[$tmp]);
                                $answer = $answer . $tmp;
                                if($i < $n - 1) $answer = $answer . "%20";
                            }
                            return $answer;
                        }
                    
                        
                        function printTable()
                        {
                            $out0 = $GLOBALS['title_list'];
                            $out1 = $GLOBALS['author_list'];
                            $out2 = $GLOBALS['publication_list'];
                            $out3 = $GLOBALS['doi_list'];
                            
                            echo("<table class="."table-fill".">
                                    <thead>
                                        <tr>
                                            <th class="."text-left".">Title</th>
                                            <th class="."text-left".">Author</th>
                                            <th class="."text-left".">Publication</th>
                                            <th class="."text-left".">doi</th>
                                        </tr>
                                    </thead>
                                  <tbody class="."table-hover".">");
        
                            for($i = 0; $i < count($GLOBALS['doi_list']); $i++)
                            {
                                echo("<tr>
                                        <td class="."text-left"."> $out0[$i] </td>
                                        <td class="."text-left"."> $out1[$i] </td>
                                        <td class="."text-left"."> $out2[$i] </td>
                                        <td class="."text-left"."> $out3[$i] </td>
                                    </tr>");
                            }
                            
                             echo("</tbody>
                                </table>");
                        }
                    
                    
                        # returns array of synonyms from most to least significant
                        function get_synonyms($word)
                        {
                            $answer = array(); 
                            $apikey = "Xot7CT1qrX5TBPACjroW";
                            $language = "en_US"; 
                            $endpoint = "http://thesaurus.altervista.org/thesaurus/v1";
                            $ch = curl_init(); 
                            curl_setopt($ch, CURLOPT_URL, "$endpoint?word=".urlencode($word)."&language=$language&key=$apikey&output=json"); 
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
                            $data = curl_exec($ch); 
                            $info = curl_getinfo($ch); 
                            curl_close($ch); 
                            
                            if ($info['http_code'] == 200) 
                            { 
                                $result = json_decode($data, true);  
                                foreach ($result["response"] as $value) 
                                { 
                                    $string = $value["list"]["category"].$value["list"]["synonyms"];
                                    
                                    // get the synonym words from string
                                    $i = 0;
                                    $n = strlen($string);
                                    
                                    while($i < $n)
                                    {
                                        $j = $i;
                                        $temp = "";
                                        
                                        while($j < $n)
                                        {
                                            if($string[$j] == '|' or
                                               $string[$j] == '(' or $string[$j] == ')')
                                            {
                                                break;
                                            }
                                            $temp = $temp.$string[$j];
                                            $j = $j + 1;
                                        }
                                        
                                        if($temp != "generic term"
                                          and $temp != "noun" and $temp != "")  
                                        {
                                            array_push($answer, $temp);
                                        }
                                        
                                        $i = $j + 1;
                                    }
                                }
                            }
                            return $answer;
                        }

                    
                        # sintax rules:
                        # using " " to merge more keywords into one
                        # assigning @ to words which can be replaced by empty string (not necessarily included in query) 

                        if(isset ($_POST["search"])) {

                            echo "<br>";
                            
                            $keywords = $_POST["phrase"];
                                
                            $array = separate($keywords);
                                
                            $query = split_keywords($array);
                            
                            $ACM_query = ACM_split_keywords($array);
                                                
                            XploreAPI($query);
                            
                            SpringerAPI($query);
                            
                            Search($array);
                            
                            printTable();
                            
                            # $synonyms = get_synonyms("array");
                            # foreach($synonyms as $word)
                            # {
                            #     echo $word . "<br>";
                            # }
                        }

                    ?>
                    
                </form>

            </div> 
        
        </div>
        
        <footer class = "container-fluid-text-center">
            
            <a href="mailto: n.novarlic@innopolis.ru"> <img src = "img/subscribe.png" height = "40px" width="40px"></a>
            <div class = "row">
                <p> Cyber-Physical Systems Lab </p>
            </div>
        
        </footer>
        
    </body>
    
</html>