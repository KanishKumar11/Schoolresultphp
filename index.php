<!doctype html>
<html>
<head>
<title>result</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body{
    font-family:Poppins, Monoscape;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    position:relative;
    flex-direction:column;
    background:cream;
}

.mx-auto{
    height:100px;
    margin-top:20px;
}
.search{
    margin-bottom:10px;
    display:flex;
    position:relative;
}
input{
    border:2px solid black;
}
.table-responsive{
    width:90vw;
}
.footer{
    position:relative;
}
#footer{
    background:#0c022b;
    width:100vw;
    padding:7px;
    padding-bottom:2px;
    position:sticky;
    text-align:center;
    display:block;
    color:#a79bcc;
    bottom:0;
    /* float:bottom; */
}
#footer a{
    color:#a79bcc;
}
html, body{
    min-height: 100%;
  height: 100%;
}
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
*,html{
    font-family: 'Poppins', sans-serif;
}
table{
    text-align:center;
}
@media only screen and (max-width:1100px){
    body{
        width:100vw !important;
        /* padding-left:100px; */
    }
    .table-responsive{
        overflow:none;
        width:100vw;
        margin-left:10px;
        padding-left:10px;
        padding-right:10px;
        padding-top:10px;
    }
    .info{
    margin-left:10px;
    padding-left:5px;
    margin-top:50px;
    /* padding-top:100px; */
    }
}
</style>
</head>
<body>
<h1>BHARTIYA VIDHYA BHAVANS SL PUBLIC SCHOOL AMRITSAR</H1>
 <img class="mx-auto d-block" src="./logo.jpeg" />
<form action="index.php" method="GET">
Enter your Roll No.
    <div class="search">
        <input type="number" value="<?php if(isset($_GET['roll'])) ?>" placeholder="YOUR ROLL NO" name="roll" class="form-control">
                <button type="submit" class="btn"><span class="material-symbols-outlined">
search
</span></button>
    </div>
    <div>

    </div>
</form>
<?php
$roll = htmlspecialchars($_REQUEST['roll']);

include 'con.php';
$sel = "SELECT * from `result12` WHERE `Roll`='$roll' ";
$query = mysqli_query($con,$sel);
$nums = mysqli_num_rows($query);


while($result = mysqli_fetch_array($query)){
?>   
<div class="main-div">
    <div class="info">
    <span>Roll No:</span><span>&nbsp<?php echo $result['Roll']; ?></span><br>
    <span>Candidate Name:</span><span>&nbsp<?php echo $result['Name']; ?></span>
    </div>
        <div class="center-div">
            <div class="table-responsive">
                <table class="border-separate border-spacing-3 border border-slate-400 table table-striped">
                    <thead>
                        <tr class="border-spacing-6">
                            <th class="table-dark border border-slate-400 border-spacing-2">SUB CODE</th>
                            <th class="table-dark border border-slate-400 border-spacing-2">SUB NAME</th>
                            <th class="table-dark border border-slate-400 border-spacing-2">TOTAL</th>
                            <th class="table-dark border border-slate-400 border-spacing-2">POSITIONAL GRADE</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                        <td class="border border-slate-400"><?php echo $result['S1']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['SN1'] ?></td>
                        <td class="border border-slate-400"><?php echo $result['M1']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['G1']; ?></td>
                        </tr>
                        <tr>
                        <td class="border border-slate-400"><?php echo $result['S2']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['SN2']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['M2']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['G2']; ?></td>
                        </tr>
                        <tr>
                        <td class="border border-slate-400"><?php echo $result['S3']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['SN3']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['M3']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['G3']; ?></td>
                        </tr>
                        <tr>
                        <td class="border border-slate-400"><?php echo $result['S4']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['SN4']; ?></td>
                        
                        <td class="border border-slate-400"><?php echo $result['M4']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['G4']; ?></td>
                        </tr>
                        <tr>
                        <td class="border border-slate-400"><?php echo $result['S5']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['SN5']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['M5']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['G5']; ?></td>
                        </tr>
                        <tr>
                        <td class="border border-slate-400"><?php echo $result['S6']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['SN6']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['M6']; ?></td>
                        <td class="border border-slate-400"><?php echo $result['G6']; ?></td>
                        </tr>
                        <tr>
                        <td class="" colspan="6">Result: <?php echo $result['Result']; ?></td>
                        </tr>
                    <?php } ?>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer>
    <div class="footer">
    <div id="footer">
    <p>Designed & Developed by <a href="https://glaark.com/kanish-kumar">Kanish Kumar</a></p>
    </div>
    </div>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="./rs.js"></script>
    </body>
</html>