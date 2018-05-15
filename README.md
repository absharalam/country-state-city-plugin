## Welcome to Jquery Country-State-City-Plugin

THis plugin solve problem of country state city dropdown with simple implementation.

You can use this plugin in any application.

### Implementation Step

1) copy below script at the bottom of you body tag

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>  // this is jquery plugin
<script type="text/javascript" src="countrystatecity.min.js"></script> // this is our country-state-city-plugin

2) changes in HTML select option code
 
  <select name="p_country" element-id="country" dependent-state-id="state_id1" dependent-city-id="city_id1" id="country_id1"  class="countrystatecity">
					<option value="">select country</option>
	</select>
  
  <select name="p_state" element-id="state" dependent-city-id="city_id1" id="state_id1" id="state_id1" class="countrystatecity">
					<option value="">select</option>
	</select>
  
  <select name="p_city" element-id="city" id="city_id1" class="countrystatecity">
					<option value="">select</option>
	</select>
  
  ## Important Notes:- You must specify the "element-id" attribute to each select option and each select element has class "countrystatecity"
        for country element-id = "country"
            state element-id = "state"
            city element-id = "city"
        define class="countrystatecity" for each element
        ### each element should have one unique id. id should be any thing but unique.
```markdown

1. Numbered
2. List

**Bold** and _Italic_ and `Code` text

[Link](url) and ![Image](src)
```

For more details see [GitHub Flavored Markdown](https://guides.github.com/features/mastering-markdown/).

### Jekyll Themes

Your Pages site will use the layout and styles from the Jekyll theme you have selected in your [repository settings](https://github.com/absharalam/country-state-city-plugin/settings). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://help.github.com/categories/github-pages-basics/) or [contact support](https://github.com/contact) and we’ll help you sort it out.
