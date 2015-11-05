<div class="container-fluid marketing">
    <div class="container">
      <div class="row-fluid">
        <div data-spy="affix" class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#1"><i class="icon-chevron-right"></i>Roster</a></li>
          <li><a href="#2"><i class="icon-chevron-right"></i>Footer</a></li></ul>
      </div>
        <div class="offset3 span9">
		<div class="page-header">
			<h1 id="1"><?php echo $pageTitle?></h1>
		</div>
        <table class="table table-striped">
        <thead>
            <tr>
                <td>Name</td>
                <td>Team</td>
                <td>Position</td>
                <td>Tenure</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $connect = mysql_connect("localhost","root","blaine");
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("robotics");
            $results = mysql_query("SELECT * FROM roster ORDER BY name");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['team']?></td>
                    <td><?php echo $row['position']?></td>
                    <td><?php echo $row['tenure']?> Years</td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
            </div>
            </div>
            </div>
    </body>