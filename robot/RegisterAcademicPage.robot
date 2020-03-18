*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${REGIS_ACADEMIC_PAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Register
${BROWSER}    chrome


*** Test Cases ***

TC01 Input All
    Open Browser    ${REGIS_ACADEMIC_PAGE}    ${BROWSER}
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/a[2]
	Select From List by Value    prefix    ผศ.ดร.
	Input Text    firstName    ชิตสุธา
	Input Text    lastName    สุ่มเล็ก
	Select From List by Value    position    อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์
	Input Text    phone    0125365925
    Input Text    inputEmail    chitsutha@kku.ac.th 
	Input Text    userName    AjChisutha
	Input Text    inputPassword    Miffy5758
	Input Text    repeatPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/button
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
	Close Browser

TC02 Input Password not correct
    Open Browser    ${REGIS_ACADEMIC_PAGE}    ${BROWSER}
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/a[2]
	Select From List by Value    prefix    ผศ.ดร.
	Input Text    firstName    ชิตสุธา
	Input Text    lastName    สุ่มเล็ก
	Select From List by Value    position    อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์
	Input Text    phone    0125365925
    Input Text    inputEmail    chitsutha@kku.ac.th 
	Input Text    userName    AjChisutha
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/button
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/academic
	Close Browser
	
TC03 Input All
    Open Browser    ${REGIS_ACADEMIC_PAGE}    ${BROWSER}
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/a[2]
	Select From List by Value    prefix    ผศ.ดร.
	Input Text    firstName    ชิตสุธา
	Input Text    lastName    สุ่มเล็ก
	Select From List by Value    position    อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์
	Input Text    phone    0125365925
    Input Text    inputEmail    chitsutha@kku.ac.th 
	Input Text    userName    AjChisutha
	Input Text    inputPassword    Miffy
	Input Text    repeatPassword    Miffy
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/button
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/academic
	Close Browser
	
TC04 No Input
	Open Browser    ${REGIS_ACADEMIC_PAGE}    ${BROWSER}
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/a[2]
	Click Element    xpath=/html/body/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/academic
