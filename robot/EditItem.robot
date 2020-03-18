*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${MAINTAIN_PAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
${HOMEPAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
${BROWSER}    Chrome
${Pic}    C://Users/ASUS/Documents/SoftE_Web/Test_Web/Mouse.jpg
${Empty}

*** Test Cases ***

TC01 Edit All
	Open Browser    ${HOMEPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/div/div/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Click Element    xpath=/html/body/div[1]/div/div/div/div/div[2]/div/table/tbody/tr[1]/td[7]/a
	Alert Should Be Present    ARE YOU SURE YOU WANT TO EDIT
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/EditItem?ItemSN=5602130000087-26
	Input Text    ItemName    เครื่องทำลายเอกสาร
	Input Text    ItemModel    Z1
	Input Text    ItemBrand    Acer
	Input Text    ItemDescript    White Colour
	Select From List by Value    LocalID    02
	Select From List by Value    CatID    04
	Select From List by Value    StatusID    1
	Input Text    ItemYear    2014
	Click Element    xpath=/html/body/div/div[1]/div/div/div/div[2]/form/div[11]/input
	Alert Should Be Present    ARE YOU SURE YOU WANT TO UPDATE
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Close Browser
	
TC02 Edit Status
	Open Browser    ${HOMEPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/div/div/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Click Element    xpath=/html/body/div[1]/div/div/div/div/div[2]/div/table/tbody/tr[1]/td[7]/a
	Alert Should Be Present    ARE YOU SURE YOU WANT TO EDIT
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/EditItem?ItemSN=5602130000087-26
	Select From List by Value    StatusID    2
	Click Element    xpath=/html/body/div/div[1]/div/div/div/div[2]/form/div[11]/input
	Alert Should Be Present    ARE YOU SURE YOU WANT TO UPDATE
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList 
	Close Browser
	
TC03 Delete name
	Open Browser    ${HOMEPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/div/div/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Click Element    xpath=/html/body/div[1]/div/div/div/div/div[2]/div/table/tbody/tr[1]/td[7]/a
	Alert Should Be Present    ARE YOU SURE YOU WANT TO EDIT
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/EditItem?ItemSN=5602130000087-26
	Input Text    ItemName    ${Empty}
	Click Element    xpath=/html/body/div/div[1]/div/div/div/div[2]/form/div[11]/input
	Alert Should Be Present    ARE YOU SURE YOU WANT TO UPDATE
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/EditItem?ItemSN=5602130000087-26
	Close Browser
	
TC04 Delete all data
	Open Browser    ${HOMEPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/div/div/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Click Element    xpath=/html/body/div[1]/div/div/div/div/div[2]/div/table/tbody/tr[1]/td[7]/a
	Alert Should Be Present    ARE YOU SURE YOU WANT TO EDIT
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/EditItem?ItemSN=5602130000087-26
	Input Text    ItemName    ${Empty}
	Input Text    ItemModel    ${Empty}
	Input Text    ItemBrand    ${Empty}
	Input Text    ItemDescript    ${Empty}
	Input Text    ItemYear    ${Empty}
	Click Element    xpath=/html/body/div/div[1]/div/div/div/div[2]/form/div[11]/input
	Alert Should Be Present    ARE YOU SURE YOU WANT TO UPDATE
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/EditItem?ItemSN=5602130000087-26	
	Close Browser


	