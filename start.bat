@echo off

REM Assuming the public / www / public_html directory is name publics

if exist C:\xampp\php\php.exe (
 
	start C:\xampp\php\php.exe -S localhost:8000 

) else (
		
	if exist C:\php\php.exe (
	
		start C:\php\php.exe -S localhost:8000
	
	) else (
		
		REM Location for WAMPP's PHP installation 
		
		if exist C:\wamp\bin\php\php.exe (
		
			start C:\wamp\bin\php\php.exe -S localhost:8000
		
		) else (
			
			echo.
			echo PHP was not found on this system.
			echo.
			echo Please install XAMPP first from https://www.apachefriends.org/
			echo.
			echo Or, you can download WAMP from https://bitnami.com/stack/wamp/installer
			echo.
			pause
		
		)
	)
)