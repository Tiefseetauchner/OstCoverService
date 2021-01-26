if (Test-Path "createTestData.sql")
{
    try
    {
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
Remove-Item "$env:XamppHome\htdocs\OST\*" -Recurse -Force

Write-Host "Deployed to $env:XamppHome\htdocs\OST\"
Copy-Item "$PSScriptRoot\*" -Destination "$env:XamppHome\htdocs\OST\" -Recurse -Exclude @(".*", "deployScript.ps1", "deployScript.bat")
Copy-Item "$PSScriptRoot\api\rest\.htaccess" -Destination "$env:XamppHome\htdocs\OST\api\rest"
