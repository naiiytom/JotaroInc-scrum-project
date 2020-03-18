*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${REGISPAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/student
${HOMEPAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
${BROWSER}    chrome


*** Test Cases ***

TC01 Input All
	Open Browser    ${HOMEPAGE}    ${BROWSER}
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/div[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Register	
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/student
	Input Text    studentID    603020760-8
	Select From List by Value    xpath= /html/body/div/div/div/div/div[2]/div/form/div[2]/div[1]/select    นางสาว
	Input Text    firstName    รัตติยากร
	Input Text    lastName    หล้ารุ่งเรืองกิจ
	Select From List by Value    xpath=/html/body/div/div/div/div/div[2]/div/form/div[3]/select    วิทยาการคอมพิวเตอร์
	Input Text    phone    0908398411
    Input Text    inputEmail    Rattiyakornl@kkumail.com
	Input Text    userName    Rattiya
	Input Text    inputPassword    Miffy5758
	Input Text    repeatPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/input
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/input
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser
	
TC02 No Input Password
	Open Browser    ${HOMEPAGE}    ${BROWSER}
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/div[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Register	
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/student
	Input Text    studentID    603020760-8
	Select From List by Value    xpath= /html/body/div/div/div/div/div[2]/div/form/div[2]/div[1]/select    นางสาว
	Input Text    firstName    รัตติยากร
	Input Text    lastName    หล้ารุ่งเรืองกิจ
	Select From List by Value    xpath=/html/body/div/div/div/div/div[2]/div/form/div[3]/select    วิทยาการคอมพิวเตอร์
	Input Text    phone    0908398411
    Input Text    inputEmail    Rattiyakornl@kkumail.com
	Input Text    userName    Rattiya
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/input
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/input
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser
	
TC03 Password Not Correct
	Open Browser    ${HOMEPAGE}    ${BROWSER}
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/div[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Register	
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/student
	Input Text    studentID    603020760-8
	Select From List by Value    xpath= /html/body/div/div/div/div/div[2]/div/form/div[2]/div[1]/select    นางสาว
	Input Text    firstName    รัตติยากร
	Input Text    lastName    หล้ารุ่งเรืองกิจ
	Select From List by Value    xpath=/html/body/div/div/div/div/div[2]/div/form/div[3]/select    วิทยาการคอมพิวเตอร์
	Input Text    phone    0908398411
    Input Text    inputEmail    Rattiyakornl@kkumail.com
	Input Text    userName    Rattiya
	Input Text    inputPassword    Miffy
	Input Text    repeatPassword    Miffy
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/input
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/input
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser

TC04 No Input
	Open Browser    ${HOMEPAGE}    ${BROWSER}
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/div[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Register	
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/student
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/input
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/input
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser
