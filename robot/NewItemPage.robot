*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${MAINTAIN_PAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
${HOMEPAGE}    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Login
${BROWSER}    Chrome
${Pic}    C://Users/ASUS/Documents/SoftE_Web/Test_Web/Mouse.jpg

*** Test Cases ***

TC01 Input All
	Open Browser    ${HOMEPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/div/div/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Click Element    xpath=/html/body/div[1]/div/div/div/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/NewItem
	Input Text    ItemID    5900000000003
	Input Text    ItemSN    5900000000003-01
	Input Text    ItemName    เม้าส์
	Input Text    ItemModel    KL-01T
	Input Text    ItemBrand    acer
	Input Text    ItemDescript    สีดำ
	Select From List by Value    LocalID    02
	Select From List by Value    CatID    02
	Select From List by Value    StatusID    0
    Input Text    ItemYear    2019
	Choose File    ItemImage    ${Pic}
	Click Element    xpath=/html/body/div/div[1]/div/div/div/div[2]/form/div[12]/input[1]
	Alert Should Be Present    ARE YOU SURE YOU WANT TO ADD NEW ITEM
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Close Browser
	
TC02 No Bought Year and No Status
	Open Browser    ${HOMEPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/div/div/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Click Element    xpath=/html/body/div[1]/div/div/div/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/NewItem
	Input Text    ItemID    5900000000003
	Input Text    ItemSN    5900000000003-2
	Input Text    ItemName    เม้าส์
	Input Text    ItemModel    KL-01T
	Input Text    ItemBrand    acer
	Input Text    ItemDescript    สีดำ
	Select From List by Value    LocalID    02
	Select From List by Value    CatID    02
	Choose File    ItemImage    ${Pic}
	Click Element    xpath=/html/body/div/div[1]/div/div/div/div[2]/form/div[12]/input[1]
	Alert Should Be Present    ARE YOU SURE YOU WANT TO ADD NEW ITEM
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/NewItem
	Close Browser
	
TC03 No Input
	Open Browser    ${HOMEPAGE}    ${BROWSER}
    Input Text    inputUsername    Rattiyakorn
	Input Text    inputPassword    Miffy5758
	Click Element    xpath=/html/body/div/div/div/div/div/div/div[2]/div/form/button
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/Home
	Click Element    xpath=/html/body/div[1]/ul/li[2]/div/div/a[1]
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/ItemList
	Click Element    xpath=/html/body/div[1]/div/div/div/a
	Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/NewItem
	Click Element    xpath=/html/body/div/div[1]/div/div/div/div[2]/form/div[12]/input[1]
	Alert Should Be Present    ARE YOU SURE YOU WANT TO ADD NEW ITEM
	Press Keys    None    ENTER
    Location Should Be    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/index.php/NewItem
	Close Browser
