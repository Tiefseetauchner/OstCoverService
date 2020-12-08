if (Test-Path "createTestData.sql")
{
    try
    {
        $mysql_server = "localhost"

        Get-Content .\createTestData.sql | mysql --defaults-extra-file=mysqlConfig
    }
    catch
    {
        write-error $Error[0]
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