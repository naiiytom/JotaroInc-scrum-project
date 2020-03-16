*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${HOMEPAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
${BROWSER}    chrome


*** Test Cases ***

Go To homepage
    Set Selenium Speed 		${DELAY}
	Open Browser    ${HOMEPAGE}    ${BROWSER}

TC01 UserName and Password correct
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home

TC02 UserName Not Correct and Password correct
	Input Text    inputUsername    Rattiya
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	
TC03 UserName correct and Password not correct
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login

TC04 UserName and Password not correct
    Input Text    inputUsername    Rattiya
	Input Text    inputPassword    Miffy
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login

TC05 UserName correct and Password not correct
    Input Text    inputUsername    
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login

TC06 UserName correct and Password not correct
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login

TC07 UserName correct and Password not correct
    Input Text    inputUsername    
	Input Text    inputPassword    
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
