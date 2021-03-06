<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Github Basics</title>
    <!-- bootstrap css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
  </head>
<body>
<div class="container">



    <h1>Github Basics Treehouse: 26/9/2016</h1>

<div class="row m-l-1 m-t-1">
          <p>git --version  :check if it is installed</p>
          <p>CREATE REPOSITORY:  git init my_repository</p>
          <p>run: git init  within the folder then it will add a repository to that folder</p>
          <p>To remove a repository simply use: rm -r my_repository/.git</p>

          <h4>Create a readme file</h4>
          <ul>
            <li>nano README</li>
            <li>git add README</li>
            <li>git commit</li>
            <li>THIS OPENS A DEFAULT NANO EDIT</li>

            <li>git config --global user.name "David Hill"</li>
            <li>git config --global user.email "davehill140279@hotmail.com"</li>
            <li>git commit -a -m "Added new feature"</li>
          <p>
            This commmits all the files and the -m means message which saves writing it in the nano editor
          </p>

          </ul>

          <h4>The staging area</h4>

          <ul>
            <li>git status</li>
            <p>
              This tells you the files that have a status to give, if file has not been changed then info wont show
            </p>
            <li>touch file1</li>
            <li>touch file2</li>
            <p>
              touch creates a file
            </p>
            <li>git add file1</li>
            <li>git add file2</li>
            <li>git commit</li>
          </ul>

          <h4>Change versions</h4>

          <ul>
            <li>git log</li>
            <p>
              Gives you commit unique reference and what order they occurred in, author, time etc
            </p>
            <li>Git checkout</li>
            <li>git checkout 'fbeddc'</li>
            <p>
              Tell Git the first five or six characers of the commit
            </p>
          </ul>
          <h4>Branches</h4>
          <ul>
            <li>git branch branchname : create a branch named branchname</li>
            <li>git checkout branchname : change to that branchname</li>
            <li>git checkout -b branchname</li>
            <p>
              create a branch named branchname and then switch to it at the same time
            </p>
            <li>git branch : show all branches</li>
            <li>git branch -D : delete branch, delete from master</li>
          </ul>
          <h4>Merging</h4>
          <ul>
            <p>
              Git merges branches and tries to resolve issues as it goes along
            </p>
            <li>git merge branchname</li>
            <p>
              Merge the history from branchname into the current branch
            </p>
          </ul>
          <h4>Remote repositories</h4>
          <ul>
            <li>git clone my_really_cool_project our_clone_project</li>
            <p>
              The clone will be placed wherever you choose
            </p>
            <li>git remote : gives you all the available remote repositories, creates origin automatically</li>
            <li>git remote add our_clone our_clone_project</li>
            <p>
              The second address could easily be a network or url address. Now the two copies can communicate
            </p>
          </ul>
          <h4>Pushing and pulling</h4>
          <ul>
            <li>To push: git push</li>
            <p>
              If you create a new branch in the cloned project, you explicitly have to tell it thats what you're doing
            </p>
            <li>git push origin newbranch</li>
            <p>
              The new feature will now be available in the original project
            </p>
            <li>Git Pull</li>
            <p>
              git pull origin newbranch
            </p>
            <h1>SLARTY BARDFAST</h1>
          </ul>
</div>
</div>


  <!-- <footer class="">
      <a href="http://twitter.com/"><img src="img/twitter-wrap.png" alt="Twitter logo" class="social-icon"></a>
      <a href="http://facebook.com/"><img src="img/facebook-wrap.png" alt="Facebook logo" class="social-icon"></a>
      <p>&copy; 2015 <a href="http://www.hiltondeville.com">Hiltondeville.com</a></p>
  </footer> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
  </html>
