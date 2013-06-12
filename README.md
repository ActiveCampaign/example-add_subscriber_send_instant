ActiveCampaign API script: Add a subscriber and trigger instant autoresponders to send.

## Requirements

1. [Our PHP API library](https://github.com/ActiveCampaign/activecampaign-api-php)
2. jQuery (it's loaded in the script if you don't use it already)
3. Familiarity working with PHP code

## Installation and Usage

You can install **example-add_subscriber_send_instant** by downloading (or cloning) the source.

Input your ActiveCampaign URL and API key at the top of the script. Example below:

<pre>
define("ACTIVECAMPAIGN_URL", "https://youraccount.activehosted.com");
define("ACTIVECAMPAIGN_API_KEY", "8yhuih...768fd56et67");
</pre>

Make sure the path to the PHP library is correct:

<pre>
require_once("../../activecampaign-api-php/includes/ActiveCampaign.class.php");
</pre>

Enter your list ID (which new subscribers will be added to):

`$listid = 1;`

By default the form looks very basic (to keep it simple):

<img src="http://d226aj4ao1t61q.cloudfront.net/lh6j62tc7_screenshot2013-06-12at9.21.44am.jpg" />

If you want to include a **first** and **last name** in the form, feel free to add new fields. Then in the PHP code, make sure to comment out the default values:

<pre>
// these values should come across from the form (make sure to name them the same as below)
//$_POST["first_name"] = "";
//$_POST["last_name"] = "";
</pre>

**Optional:** If your autoresponder relies on a segment that looks at a custom field value, include any custom field values in the `$_POST` array:

`$_POST["field"] = array("%PERS_1%,0" => "Custom field value");`

The custom field value could be part of the HTML form, or hard-coded in your script (where subscribers don't see it).

If you are using Ajax to submit the form, update the URL in the jQuery section:

<pre>
geturl = $j.ajax({
  url: '', // the URL to this page.
</pre>

If you **don't** use Ajax, update the HTML form element to include the URL:

<pre>
&lt;form id="subscribe_form" method="post" action="URL TO THIS PAGE"&gt;
</pre>

## Documentation and Links

* [Full API documentation](http://activecampaign.com/api)
* [Blog post: Advanced Subscription Form Integration](http://www.activecampaign.com/blog/advanced-subscription-form-integration/)

## Reporting Issues

We'd love to help if you have questions or problems. Report issues using the [Github Issue Tracker](https://github.com/ActiveCampaign/example-add_subscriber_send_instant/issues) or email help@activecampaign.com.