*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${REGISPAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/student
${BROWSER}    chrome


*** Test Cases ***

Go To Register Page
	Open Browser    ${REGISPAGE}    ${BROWSER}

TC01 Input All
	Input Text    studentID    603020760-8
	Select From List by Value    xpath= /html/body/div/div/div/div/div[2]/div/form/div[2]/div[1]/select    นางสาว
	Input Text    firstName    รัตติยากร
	Input Text    lastName    หล้ารุ่งเรืองกิจ
	Select From List by Value    xpath=/html/body/div/div/div/div/div[2]/div/form/div[3]/div[1]/select    ปริญญาตรี
	Input Text    phone    0908398411
    Input Text    inputEmail    Rattiyakornl@kkumail.com
	Input Text    userName    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Input Text    repeatPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
