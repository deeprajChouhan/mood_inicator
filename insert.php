<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'connection.php';
    $words=array("disinterested","evenhanded","fair-minded","inactive","indifferent","nonaligned","nonpartisan","unbiased","uncommitted","undecided","uninvolved","calm","cool","noncombatant","aloof","bystanding","clinical","collected","detached","disengaged","dispassionate","easy","impersonal","inert");
        $i = 0;
        for($i=1;$i<count($words);$i = $i + 1){
          $sql = "INSERT INTO nuteral VALUES ($i,'$words[$i]')";
          if($conn->query($sql) === TRUE){
            echo "inserted";
          }else{
            echo "No";
          }
        }
     ?>
  </body>
</html>
