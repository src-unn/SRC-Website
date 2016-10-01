# Contributing to SRC Website

We'd love for you to contribute to our source code and to make SRC Website even better than it is today! Here are the guidelines we'd like you to follow:

 - [Code of Conduct](#coc)
 - [Issues and Bugs](#issue)
 - [Feature Requests](#feature)
 - [Submission Guidelines](#submit)

## <a name="coc"></a> Code of Conduct

As contributors and maintainers of the SRC-Website project, we pledge to respect everyone who contributes by posting issues, updating documentation, submitting pull requests, providing feedback in comments, and any other activities.

Communication through any of SRC-WebDev Team channels (GitHub, Slack, etc.) must be constructive and never resort to personal attacks, trolling, public or private harassment, insults, or other unprofessional conduct.

We promise to extend courtesy and respect to everyone involved in this project regardless of gender, gender identity, sexual orientation, disability, age, race, ethnicity, religion, or level of experience. We expect anyone contributing to the SRC-Website project to do the same.

If any member of the community violates this code of conduct, the maintainers of the SRC-Website may take action, removing issues, comments, and PRs or blocking accounts as deemed appropriate.

If you are subject to or witness unacceptable behavior, or have any other concerns, please drop us a line at [http://srcng.com](http://srcng.com)

## <a name="issue"></a> Found an Issue?
If you find a bug in the source code, a mistake in the documentation or a feature not working as expected, you can help us by
submitting an issue to our [GitHub Repository][github]. Even better you can submit a Pull Request
with a fix.

See [below](#submit) for some guidelines.

## <a name="feature"></a> Want a Feature?
You can request a new feature by submitting an issue to our [GitHub Repository][github].

If you would like to implement a new feature then consider what kind of change it is:

* **Major Changes** that you wish to contribute to the project should be discussed first on our
[Slack Channel][https://srcng.slack.com/] so that we can better coordinate our efforts, prevent
duplication of work, and help you to craft the change so that it is successfully accepted into the
project.
* **Small Changes** can be crafted and submitted to the [GitHub Repository][github] as a Pull Request.

## <a name="submit"></a> Submission Guidelines

### Submitting an Issue
Before you submit your issue search the archive, maybe your question was already answered.

If your issue appears to be a bug, and has not been reported, open a new issue.
Help us to maximize the effort we can spend fixing issues and adding new
features, by not reporting duplicate issues.

### Submitting a Pull Request
Before you submit your pull request consider the following guidelines:

* Search [GitHub](https://github.com/src-unn/SRC-Website/pulls) for an open or closed Pull Request
  that relates to your submission. You don't want to duplicate effort.
* Please note that you must be an acknowledged member of the SRC-WebDev Team, or a recognized contributor, with write-access to the repository before you can push your commits.
* Make your changes in a new git branch:

     ```shell
     git checkout -b my-feature-branch-name master
     ```

* Create your patch or new feature.
* Run the full SRC-Website test cases, and ensure that all tests pass.
* Avoid checking in files that shouldn't be tracked (e.g `.nbproject`, `.tmp`, `.idea`, `source\vendor`). We recommend using a [global .gitignore](https://help.github.com/articles/ignoring-files/#create-a-global-gitignore) for this.
* Make sure **not** to include a recompiled version of the files found in `/css` and `/js` as part of your PR. We will generate these automatically.
* Commit your changes using a descriptive commit message.
* Build your changes locally to ensure all the tests pass:
* Push your branch to GitHub:

    ```shell
    git push origin my-feature-branch-name
    ```

* In GitHub, send a pull request to `src-unn:master`.
* If we suggest changes then:
  * Make the required updates.
  * Re-run the SRC-Website test cases to ensure tests are still passing.
  * Rebase your local branch (if it is behind the `master` branch) and force push to `origin` (this will update your Pull Request):

    ```shell
    git rebase master -i
    git push origin my-feature-branch-name -f
    ```

That's it! Thank you for your contribution!

#### After your pull request is merged

After your pull request is merged, you can safely delete your branch (`my-feature-branch-name`) and update your local `master` branch by pulling from `origin:master`:

* Check out the master branch:

    ```shell
    git checkout master -f
    ```

* Delete the local branch:

    ```shell
    git branch -D my-feature-branch-name
    ```

* Delete the remote branch on GitHub either through the GitHub web UI or your local shell as follows:

    ```shell
    git push origin --delete my-feature-branch-name
    ```

* Update your master with the latest `origin:master` version:

    ```shell
    git pull --ff origin master
    ```

*This guide was inspired by the [Material Design Lite contribution guidelines](https://github.com/google/material-design-lite/blob/mdl-1.x/CONTRIBUTING.md).*

*Refer to Feature-Branch Workflow Documentation at [Atlassian Git Tutorials](https://www.atlassian.com/git/tutorials/comparing-workflows/feature-branch-workflow) for illustrations*