## Rehab Graduate Contact Admin Specs

### Live Demo:

[graduate.elliottprogrammer.com](http://graduate.elliottprogrammer.com/login)

### Overview:

This app will manage the weekly contacting of all rehab graduates. Upon graduation, the graduate will be entered into the system.

-   Auto schedule calls - calls are to be made to graduates every week starting from the day they graduate and are added to the system. Auto add graduates to a weekly list of calls to make.

##### DEFAULT VIEW

Navigation: Home | Calendar View | Filter By | Add Graduate+

-   Only display 2 Yrs of Active graduates on index
-   Color code graduate record based on last contact (e.g. if the graduate has not been contacted in certain tbd time - color it red or some such)
-   Each record is clickable and takes you to the Graduate Detail Page.

##### GRADUATE DETAIL VIEW (EDIT) / NEW GRADUATE VIEW

Navigation: Home | Add Graduate+

-   Fields:
    -   Graduate Name, Designated Family Contact Name, Address, City, State, Zip, Phone1, Email Address
    -   Status Dropdown: Active, InActive
    -   Condition Dropdown: Good, Questionable, Relapsed, OOC
    -   Create Date - not editable
    -   Next Call Date/Time
    -   Last Contact Date/Time
    -   Timestamped Notes
-   Actions:
    -   Edit data and update.
    -   Set new Next Call Date manually
    -   Click “Save and Set Next Call Date” and the Next Call Date is auto updated a week from now.
    -   Click “Update Data Only” or some such to NOT update the next call date.
    -   Add new Notes - date/time and user stamped.
    -   Click “No Answer” - will auto insert a note that says something like “tried to contact, no answer. Next \* Call Date auto updated to ?

##### CALENDAR VIEW

Navigation: Home | Add Graduate+

-   Similar to current terms calendar in dashboard.
-   Show the # of calls to make on a given day. Clickable to Call List View.

##### CALL LIST VIEW

Navigation: Home | Calendar View

-   Display linked list of Graduate/Family names
-   When clicked opens Graduate Detail Page -

##### FILTER VIEWS

-   Be able to view list of InActive graduates
-   Be able to view list of graduates by Condition

##### AUTHENTICATION

-   Admin Level and Basic User Level
-   Admin can add/edit/delete users

##### NOTES

-   Run a cron to set all graduates records who are over 2 Yrs old to InActive
-   Export email addresses?

![alt text](https://laravel.com/assets/img/components/logo-laravel.svg "Laravel 5.7")

![alt text](https://travis-ci.org/laravel/framework.svg "Build Status")

![alt text](https://poser.pugx.org/laravel/framework/v/stable.svg "Latest Stable Version")
