*** Settings ***
Library    SeleniumLibrary

*** Testcases ***
Open Browser
    Open Browser    http://10.199.66.227/SoftEn2020/Sec01/Jotaro%20Inc/    Firefox
    Title Should Be    Jotaro Inc.
    Page Should Contain    Welcome to CodeIgniter!