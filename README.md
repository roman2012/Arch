#ArchTheme Admin
====

#installation

1. first of all copy this zip file to Vendor\croogo\croogo\Croogo\View\Themed
2. in config/setting.json  edit "admin_theme": "" and write "admin_theme": "Arch"
3. note that every change that you made in locale or other change setting.json and remove admin_theme and load default - check setting.json every any change
4. note that theme.json is very sensative , if you dont write json format it's show error in admin/extensions/extensions_themes  and we have some error - for solve this problem please attention that we dont have comma after last array item
you can see inthis example
"settings": {
  "css": {
    "container": "container",
    "row": "row",
    "columnFull": "col-sm-12",
    "columnLeft": "col-sm-8",
    "columnRight": "col-sm-4",
    "formInput": "form-control"
  }
},
