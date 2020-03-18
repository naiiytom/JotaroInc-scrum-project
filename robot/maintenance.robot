*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${BROWSER}    Chrome
${LOGIN URL}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
${HOMEPAGE URL}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
${MAINTENANCE URL}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Maintenance
${MAINTENANCEITEM URL}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/MaintenanceItem?ItemSN=5602130000087-3
${DELAY}    0
${PIC}    C:/Users/nor-e/Downloads/hbd.jpg
${PIC2}    C:/Users/nor-e/Downloads/l.jpg

*** Test Cases ***
Login Page
	Open Browser    ${LOGIN URL}    ${BROWSER}
	Input Text    inputUsername    nitha
	Input Text    inputPassword    Nitha1234
	Click Element    xpath=//*[@id="loginButton"]
	Location Should Be    ${HOMEPAGE URL}

	
Click maintenanceButton on maintenancepage to maintenanceItem
	Go To    ${MAINTENANCE URL}
	Click Element    xpath=//*[@id="dataTable"]/tbody/tr[1]/td[7]/a
	Location Should Be    ${MAINTENANCEITEM URL}

	
Cancle Maintenance
	Go To    ${MAINTENANCEITEM URL}
    Click Element    xpath=//*[@id="btn_cancle"]
    Location Should Be    ${MAINTENANCE URL}


Input Priority Only
    Go To    ${MAINTENANCEITEM URL}
    Select From List by Value    HasID    1
	Click Element    xpath=//*[@id="btn_submit"]
	Alert Should Be Present    text=ARE YOU SURE YOU WANT TO NOTIFY TO REPAIR
    Location Should Contain    ${MAINTENANCEITEM URL}
	
Input Priority and Image
    Go To    ${MAINTENANCEITEM URL}
    Select From List by Value    HasID    1
	Choose File    ItemImage    ${PIC}
	Click Element    xpath=//*[@id="btn_submit"]
	Alert Should Be Present    text=ARE YOU SURE YOU WANT TO NOTIFY TO REPAIR
    Location Should Contain    ${MAINTENANCEITEM URL}

Input Images Only
	Go To    ${MAINTENANCEITEM URL}
	Choose File    ItemImage    ${PIC}
	Click Element    xpath=//*[@id="btn_submit"]
	Alert Should Be Present    text=ARE YOU SURE YOU WANT TO NOTIFY TO REPAIR
    Location Should Contain    ${MAINTENANCEITEM URL}
	
Input Reason Only
	Go To    ${MAINTENANCEITEM URL}
	Input Text    MtDetail    testitem27
	Click Element    xpath=//*[@id="btn_submit"]
	Alert Should Be Present    text=ARE YOU SURE YOU WANT TO NOTIFY TO REPAIR
    Location Should Be    ${MAINTENANCE URL}
	
	
Input Reason and Priority
	Go To    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/MaintenanceItem?ItemSN=5602130000087-5
	Input Text    MtDetail    testitem5
	Select From List by Value    HasID    1
	Click Element    xpath=//*[@id="btn_submit"]
	Alert Should Be Present    text=ARE YOU SURE YOU WANT TO NOTIFY TO REPAIR
    Location Should Be    ${MAINTENANCE URL}
	
	
Input Reason and Image
	Go To    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/MaintenanceItem?ItemSN=5602130000087-6
	Input Text    MtDetail    testitem6
	Choose File    ItemImage    ${PIC}
	Click Element    xpath=//*[@id="btn_submit"]
	Alert Should Be Present    text=ARE YOU SURE YOU WANT TO NOTIFY TO REPAIR
    Location Should Be    ${MAINTENANCE URL}


Input Reason and Priority and Images
	Go To    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/MaintenanceItem?ItemSN=5602130000087-7
	Select From List by Value    HasID    1
	Input Text    MtDetail    testitem7
	Choose File    ItemImage    ${PIC}
	Click Element    xpath=//*[@id="btn_submit"]
	Alert Should Be Present    text=ARE YOU SURE YOU WANT TO NOTIFY TO REPAIR
    Location Should Be    ${MAINTENANCE URL}
	
	[Teardown]    Close Browser
	
