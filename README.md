# Majority Judgment bot - botman

A bot used to create majority-judgment polls that works with many clients such as Discord, Slack and Telegram. Based on [botman](https://botman.io/).

*This is a work in progress, not really functional yet.*

## Installation

    git clone https://github.com/MieuxVoter/majority-judgment-bot-botman.git
    cd majority-judgment-bot-botman
    composer install

## Create bots

### Discord

1. Enable the *Developer mode* in the *Advanced* tab in Discord settings.
2. In https://discord.com/developers/applications, create a new application:
  - click on the *New Application* button, fill application name and validate;
  - under the *Bot* tab:
    - in *Privileged Gateway Intents* section, check *Presence Intent* and *Server Members Intent* then save;
  - under the *OAuth2* tab:
    - check `bot` in the `Scopes` section,
    - check the permissions you want in the `Bot Permissions` section,
    - then copy the generated authentication url.
3. Paste the authentication url in your web browser, then confirm the dialog popup to attach the bot to a Discord server.

### Test your bot

In `demo.php`, replace `your token` by the actual token that you can copy in your Discord application page under *Bot* tab, in *Build-A-Bot* section.

Then run the script: the Discord bot should be connected and answer every time a user says "hello".
