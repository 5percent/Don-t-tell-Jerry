<div class="list">
<?PHP
for ($i = 0; $i< $count && $i <20; $i++) {
    $name = $dirArray[$i];
    $value = str_replace("'","\'", $name);
    echo "<a href='http://192.168.1.158:8888/?dir=$value'>$name</a>";
}
?>
</div>
