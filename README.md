# Mikrotik Discord Webhook

<b>Mikrotik Discord Webhook</b> easily send monitoring logs to discord

# Requirements

|                 | Note                                                                                                                          |
| --------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| Discord         | Download the [Discord](https://discord.com) through to the website                                                            |
| Webhook Discord | [Read this](https://support.discord.com/hc/en-us/articles/228383668-Intro-to-Webhooks) guide to make your own discord webhook |
| Mikrotik        | You can use any type of Mikrotik                                                                                              |

# How to use

1. You can use my url that already deployed in Heroku or you can deploy your own by pressing Deploy to heroku button.
2. Copy this script to your mikrotik, for example in netwatch Up/Down :

```bash
/tool fetch url="{SERVER}/form.php?text=INPUT_YOUR_TEXT_HERE&id=INPUT_ID_WEBHOOK&token=INPUT_TOKEN_WEBHOOK" keep-result=no;
```

Notes

- The `SERVER` change to your server address.
- The `INPUT_YOUR_TEXT` you need to change to whatever you want, example `THE+RB+FRONT+IS+UP` (You need add `+` for spacing)
- The `INPUT_ID_WEBHOOK` change to your id discord webhook url.
- The `INPUT_ID_WEBHOOK` change to your discord webhook token.
