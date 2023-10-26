This is a demo repo to highlight a few things in Pagely's CI/CD pipeline.

A more detailed doc can be found [on Pagely's Support site](https://support.pagely.com/hc/en-us/articles/360047749731-Automatically-Deploying-Your-WordPress-Site-with-GitHub-Actions), but if you're already familiar with GitHub actions these pointers might be all you need.

* You can create an integration ID and secret in [Atomic](https://atomic.pagely.com/), then put those and your app ID in the appropriate file under .github/workflows .
* Want to publish from the same repo, to multiple Pagely apps? No problem, again look at the files in .github/workflows -- we use the same integration info for two sites, varying only on the app's numeric ID. (You could also use GitHub reusable workflows, or other approaches; this is just one simple example.)
* Git submodules are supported. Be sure to add the "with/submodules" snippet to your deploy workflow.
