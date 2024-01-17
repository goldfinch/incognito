```
---
Name: app-incognito
After:
  - '#goldfinch-incognito'
---
SilverStripe\Control\Director:
  rules:
    '***': 'SilverStripe\Admin\AdminRootController'

SilverStripe\Admin\AdminRootController:
  url_base: '***'

```

```
APP_SESSION_INCOGNITO=
```

```
"resources-dir": "******"
```
