بسم الله الرحمن الرحيم

Symfony Specification Design Pattern Challenge
==============================================

Hi,

This project was build in order to show a simple implementation of the specification design pattern on a Symfony project.

The project show football teams names, championship and budget.
There is 2 specifications :


⋅⋅* SpecBeAPremierLeagueMember : have to check if the team is part of the English Premier League


⋅⋅* SpecOwnMoreThan25M : have to check if the team have more than 25 000 000 of budget
    
**CHALLENGE**
    

In my actual tests, if i disable specifications i have :

    Paris SG - Ligue 1 - 2,147,483,647.00£
    Manchester City FC - Premier League - 100,000,000.00£
    Chelsea FC - Premier League - 100,000,000.00£
    Arsenal FC - Premier League - 50,000,000.00£
    Leicester City - Premier League - 20,000,000.00£
    Crystal Palace FC - Premier League - 5,000,000.00£

If i enable SpecOwnMoreThan25M one, it prints :

    Paris SG - Ligue 1 - 2,147,483,647.00£
    Manchester City FC - Premier League - 100,000,000.00£
    Chelsea FC - Premier League - 100,000,000.00£
    Arsenal FC - Premier League - 50,000,000.00£

So... it works !

But the problem is here : when i want to enable SpecBeAPrmierLeagueMember, it print also :

    Paris SG - Ligue 1 - 2,147,483,647.00£
    Manchester City FC - Premier League - 100,000,000.00£
    Chelsea FC - Premier League - 100,000,000.00£
    Arsenal FC - Premier League - 50,000,000.00£
    
Paris SG should not be here...

So if you want, explore the project and fix the bug in order to understand better this design pattern.

I'm waiting for your pull requests !


