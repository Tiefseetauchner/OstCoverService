if (Test-Path "createTestData.sql")
{
    [system.reflection.assembly]::LoadWithPartialName("MySql.Data")
    $mysql_server = "localhost"
    $mysql_user = "root"
    $mysql_password = "eah+S`;<6Pj=5-m["
    write-host "Create coonection to db1"
    # Connect to MySQL database 'db1'

    $cn = New-Object -TypeName MySql.Data.MySqlClient.MySqlConnection
    $cn.ConnectionString = "SERVER=$mysql_server;UID=$mysql_user;PWD=$mysql_password"
    $cn.Open()
    write-host "Running backup script against db1"
    # Run Update Script MySQL
    $cm = New-Object -TypeName MySql.Data.MySqlClient.MySqlCommand
    $sql = Get-Content "createTestData.sql"
    $cm.Connection = $cn
    $cm.CommandText = $sql
    $cm.ExecuteReader()
    write-host "Closing Connection"
    $cn.Close()
}
else
{
    Write-Warning "No Database creation script found. Database will not be updated"
}

Remove-Item "$PSScriptRoot\..\OST\*" -Recurse -Force

Copy-Item "$PSScriptRoot\*" -Destination "$PSScriptRoot\..\OST\" -Recurse -Exclude @(".*", "deployScript.ps1", "deployScript.bat")