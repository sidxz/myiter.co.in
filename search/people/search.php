<?php
require_once '../../header.php';


//get variables
$user_search = $_GET['usersearch'];
$sort = $_GET['sort'];
 

// echo styles and headings

echo'<style>
<!--



A.type1:link    {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:visited {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:active  {color:#FFFFFF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px; text-decoration:none;}
A.type1:hover   {color:#0099FF;FONT-FAMILY: verdana; FONT-SIZE: 13px; line-height:19px;text-decoration:underline;}

A.type7:link    {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:27px;  text-decoration:none;}
A.type7:visited {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:27px;   text-decoration:none;}
A.type7:active  {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:27px;   text-decoration:none;}
A.type7:hover   {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 22px; line-height:27px;  text-decoration:underline;}

A.type3:link    {color:#666666; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:visited {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:active  {color:#666666;FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:none;}
A.type3:hover   {color:#990066; FONT-FAMILY: verdana; FONT-SIZE: 18px; line-height:13px; font-weight:bold; text-decoration:underline;}
//-->
</style>

<html>
<title>MyITER.co.in</title>
<body background="" style=" background-attachment: fixed; overflow-x:hidden;">

<div style="background:url(/static/main/trans.png); position:absolute; top:30px; left:0px; height: 100px; width:100%; z-index: 20; overflow: visible;">
</div>

<div style="position: absolute; top:60px; left:150px; width:470px; height: 50px; background-color: null; z-index:50; overflow: visible; FONT-SIZE: 30px; ">
<font face="Verdana, Verdana" color="#ffffff">Search</font>

</div>    


<div style="position: absolute; top:60px; left:350px; width:470px; height: 50px; background-color: null; z-index:50; overflow: visible; FONT-SIZE: 30px; ">
<form method="get" action="search.php">
				<font color="#0e1f5b" size="1" face="Verdana">
				<label for="usersearch"></label>
				<input type="text" id="usersearch" name="usersearch" size="70" value="'.$user_search.'" style="border: #ffffff 1px solid; "  />
				<label for="sort"></label>
				<input type="hidden" id="sort" name="sort" size="2" value="2">
				<input type="submit" style="border: #339900 1px solid; background: #ffffff; width: 30px; height: 20px; background: transparent url(/static/buttons/login.jpg) center top; cursor: pointer; cursor: hand; color:#ffffff;" value="Go!" name="Search" > <br />
					</font>
					</form>

</div>    ';

 
 
 
 
// FUNCTIONS


// This function builds a search query from the search keywords and sort setting
  function build_query($user_search, $sort) {
    $search_query = "SELECT first_name, last_name FROM users ";

    // Extract the search keywords into an array
    $clean_search = str_replace(',', ' ', $user_search);
    $search_words = explode(' ', $clean_search);
    $final_search_words = array();
    if (count($search_words) > 0) {
      foreach ($search_words as $word) {
        if (!empty($word)) {
          $final_search_words[] = $word;
        }
      }
    }

    // Generate a WHERE clause using all of the search keywords
    $where_list = array();
    if (count($final_search_words) > 0) {
      foreach($final_search_words as $word) {
        $where_list[] = "first_name LIKE '%$word%' OR last_name LIKE '%$word%'";
      }
    }
    $where_clause = implode(' OR ', $where_list);

    // Add the keyword WHERE clause to the search query
    if (!empty($where_clause)) {
      $search_query .= " WHERE $where_clause";
    }

    // Sort the search query using the sort setting
    switch ($sort) {
    // Ascending by job title
    case 1:
      $search_query .= " ORDER BY title";
      break;
    // Descending by job title
    case 2:
      $search_query .= " ORDER BY pagerank DESC";
      break;
    // Ascending by state
    case 3:
      $search_query .= " ORDER BY state";
      break;
    // Descending by state
    case 4:
      $search_query .= " ORDER BY state DESC";
      break;
    // Ascending by date posted (oldest first)
    case 5:
      $search_query .= " ORDER BY date_posted";
      break;
    // Descending by date posted (newest first)
    case 6:
      $search_query .= " ORDER BY date_posted DESC";
      break;
    default:
      // No sort setting provided, so don't sort the query
    }

    return $search_query;
  }

  
  
  // This function builds navigational page links based on the current page and the number of pages
  function generate_page_links($user_search, $sort, $cur_page, $num_pages) {
    $page_links = '';

    // If this page is not the first page, generate the "previous" link
    if ($cur_page > 1) {
      $page_links .= '<a FONT class="type3" href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $user_search . '&sort=' . $sort . '&page=' . ($cur_page - 1) . '"><-</a> ';
    }
    else {
      $page_links .= ' <- ';
    }

    // Loop through the pages generating the page number links
    for ($i = 1; $i <= $num_pages; $i++) {
      if ($cur_page == $i) {
        $page_links .= ' ' . $i;
      }
      else {
        $page_links .= ' <a FONT class="type3" href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $user_search . '&sort=' . $sort . '&page=' . $i . '"> ' . $i . '</a>';
      }
    }

    // If this page is not the last page, generate the "next" link
    if ($cur_page < $num_pages) {
      $page_links .= ' <a FONT class="type3" href="' . $_SERVER['PHP_SELF'] . '?usersearch=' . $user_search . '&sort=' . $sort . '&page=' . ($cur_page + 1) . '">-></a>';
    }
    else {
      $page_links .= ' ->';
    }

    return $page_links;
  }
  
  
  
  
  
  
  
  

















// SEARCH

echo '<div  style="position:absolute; left:200px; width:600px; height:1000px;  top:170px; z-index:1000; border:none">  ';

$cur_page = isset($_GET['page']) ? $_GET['page'] : 1;
$results_per_page = 5;  // number of results per page
$skip = (($cur_page - 1) * $results_per_page);


$dbc = mysqli_connect('localhost','myiter_admin','Papani```','myiter_database')
or die('Oopzz! Our Server is over Crowded! Please retry  after sometine: ERROR CODE 200');


$query=build_query($user_search, $sort);
//echo $query.'-----------------';
$result=mysqli_query($dbc,$query);


$total=mysqli_num_rows($result);

$num_pages=ceil($total/$results_per_page);

$query=$query." LIMIT $skip , $results_per_page";
//echo $query.'+++++++';
$result=mysqli_query($dbc,$query);

while ($row=mysqli_fetch_array($result))
{
if($row['type']=="news" || $row['type']=="event")
{
$sum=$row['details'];
$sum=substr($sum,0,200);
echo '<a FONT class="type7" href="/news/news.php?pid='.$row['pid'].'" target="_parent"> '.$row['topic'].'<br></a>';
echo'<font face="Verdana, Verdana" size="2"  color="#666666">'.$sum.' ...... <br><br></font>';
echo "<br>";
}

else
{
$sum=$row['details'];
$sum=substr($sum,0,200);
echo '<a FONT class="type7" href="/sc/index.php?id='.$row['pid'].'" target="_parent"> '.$row['topic'].'<br></a>';
echo'<font face="Verdana, Verdana" size="2"  color="#666666">'.$sum.' ...... <br><br></font>';
echo "<br>";
}

}

if ($num_pages > 1) {
    echo generate_page_links($user_search, $sort, $cur_page, $num_pages);
  }

  mysqli_close($dbc);
echo '</div>';
?>

