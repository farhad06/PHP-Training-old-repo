
# Git Commands Cheat Sheet

## Configure Git User Information

Set Git username:
```bash
git config --global user.name "<GitHub username>"
```

Set Git email:
```bash
git config --global user.email "example@gmail.com"
```

## Adding New Files to a Repository

1. Initialize Git:
   ```bash
   git init
   ```

2. Add remote repository:
   ```bash
   git remote add origin <repository-url>
   ```

3. Add files to the staging area:
   ```bash
   git add .
   ```

4. Commit the changes:
   ```bash
   git commit -m "Commit message"
   ```

   or

   ```bash
   git commit -a
   ```

5. Push to GitHub:
   ```bash
   git push -u origin master
   ```

## Making Changes to Existing Files and Pushing to Repository

1. Add new or modified files:
   ```bash
   git add .
   ```

   or

   ```bash
   git add file-1 file-2 ... file-n
   ```

2. Commit the changes:
   ```bash
   git commit -m "Commit message"
   ```

   or if step 2 fails:
   ```bash
   git push -f origin master
   ```

3. View status:
   ```bash
   git status
   ```

## Branching Operations

1. Create a new branch:
   ```bash
   git checkout -b <new-branch-name>
   ```

2. Switch between branches:
   ```bash
   git checkout <branch-name>
   ```

   or

   ```bash
   git switch <branch-name>
   ```

## Collaborating with Remote Repositories

1. Pull changes from a repository:
   ```bash
   git pull origin <branch-name>
   ```

2. Clone a repository:
   ```bash
   git clone <repository-url>
   ```

