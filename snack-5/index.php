<?php

/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo
*/

$paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque faucibus orci euismod est faucibus interdum. Sed sodales eleifend nunc, at sagittis arcu vehicula sed. Suspendisse mattis turpis placerat quam dictum molestie. Mauris id imperdiet felis. Vestibulum ultricies erat et vulputate commodo. Suspendisse placerat non nisi a sagittis. Donec vestibulum posuere leo eu facilisis. Nullam in ultrices justo. Integer dignissim metus sit amet semper vulputate. Integer pellentesque at odio id volutpat. Vestibulum nec tellus nec elit tempus venenatis eget sodales augue.";

$paragraph_array = explode(". ", $paragraph);

?>



<h1>Snack 5</h1>

<h3>Paragrafo iniziale</h3>

<p><?php echo $paragraph; ?></p>

<h3>Paragrafo diviso ad ogni punto</h3>


<ul>
<?php
 foreach ($paragraph_array as $text){
     echo "<li>" . $text . "</li>";
 }
?>
</ul>