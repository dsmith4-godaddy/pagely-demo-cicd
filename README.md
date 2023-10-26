This is a demo repo to highlight a few things in Pagely's CI/CD pipeline:

* Want to publish the same code to multiple sites (say, a production and non-production site)? Check out the two files in .github/workflows/ . Note that they're using the same integration ID (and same secret), just triggering on different branches and using different app IDs for deployment.
* Want to use Git submodules? No problem, check out .gitmodules . 
