if (Test-Path "createTestData.sql")
{
    try {
        $mysql_server = "localhost"
        $mysql_user = "root"
        $mysql_password = "eah+S`;<6Pj=5-m["

        mysql
    } catch {
        Write-Error "Database setup failed, is mysql installed?"
    }
}
else
{
    Write-Warning "No Database creation script found. Database will not be updated"
}

Write-Host "Copying Files"

Remove-Item "$PSScriptRoot\..\OST\*" -Recurse -Force

Copy-Item "$PSScriptRoot\*" -Destination "$PSScriptRoot\..\OST\" -Recurse -Exclude @(".*", "deployScript.ps1", "deployScript.bat")

Write-Host "Deployed to $PSScriptRoot\..\OST\"