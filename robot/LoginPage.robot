*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${LOGINPAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
${BROWSER}    chrome


*** Test Cases ***

TC01 UserName and Password correct
    Open Browser    ${LOGINPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Close Browser

TC02 UserName Not Correct and Password correct
    Open Browser    ${LOGINPAGE}    ${BROWSER}
	Input Text    inputUsername    Rattiya
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser
	
TC03 UserName correct and Password not correct
    Open Browser    ${LOGINPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser
TC04 UserName and Password not correct
    Open Browser    ${LOGINPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiya
	Input Text    inputPassword    Miffy
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser

TC05 Not Input UserName and Input Password 
    Open Browser    ${LOGINPAGE}    ${BROWSER}  
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser

TC06 Input UserName and Not Input Password 
    Open Browser    ${LOGINPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn  
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser

TC07 Not Input All
    Open Browser    ${LOGINPAGE}    ${BROWSER}    
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser
