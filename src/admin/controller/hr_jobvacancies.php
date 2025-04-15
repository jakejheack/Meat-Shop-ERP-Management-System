<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM job_vacancies WHERE id LIKE '" . date( 'Y' ) . "%' ORDER BY id DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'id' ], strlen( $firstRow[ 'id' ] ) - 4, strlen( $firstRow[ 'id' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $jobDate = $MySQLiconn->real_escape_string($_POST['jobDate']);
    $jobTitle = $MySQLiconn->real_escape_string($_POST['jobTitle']);
    $jobLocation = $MySQLiconn->real_escape_string($_POST['jobLocation']);
    $jobExperience = $MySQLiconn->real_escape_string($_POST['jobExperience']);
    $jobType = $MySQLiconn->real_escape_string($_POST['jobType']);
    $jobSalary = $MySQLiconn->real_escape_string($_POST['jobSalary']);
    $jobNo = $MySQLiconn->real_escape_string($_POST['jobNo']);
    $jobPriority = $MySQLiconn->real_escape_string($_POST['jobPriority']);
    $jobBranch = $MySQLiconn->real_escape_string($_POST['jobBranch']);
    $jobDescription = $MySQLiconn->real_escape_string($_POST['jobDescription']);
    $jobStatus = $MySQLiconn->real_escape_string($_POST['jobStatus']);
    
    $SQL = $MySQLiconn->prepare("INSERT INTO job_vacancies (id,jobDate,jobTitle,jobLocation,jobExperience,jobType,jobSalary,jobNo,jobPriority,jobBranch,jobDescription,jobStatus) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $SQL->bind_param("isssssssssss",intval( AutoGenID() ),$jobDate,$jobTitle,$jobLocation,$jobExperience,$jobType,$jobSalary,$jobNo,$jobPriority,$jobBranch,$jobDescription,$jobStatus);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/hr_jobvacancies");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM job_vacancies WHERE id=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/hr_jobvacancies");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM job_vacancies WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM job_vacancies WHERE id=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE job_vacancies SET jobDate=?,jobTitle=?,jobLocation=?,jobExperience=?,jobType=?,jobSalary=?,jobNo=?,jobPriority=?,jobBranch=?,jobDescription=?,jobStatus=? WHERE id=?");
    $SQL->bind_param("sssssssssssi",$_POST['jobDate'],$_POST['jobTitle'],$_POST['jobLocation'],$_POST['jobExperience'],$_POST['jobType'],$_POST['jobSalary'],$_POST['jobNo'],$_POST['jobPriority'],$_POST['jobBranch'],$_POST['jobDescription'],$_POST['jobStatus'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/hr_jobvacancies");
    exit();

}

 $job_vacancies = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_vacancies WHERE jobStatus='Enabled';" ) );

 
?>

