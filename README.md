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

**Optional:** If your autoresponder relies on a segment that looks at a custom field value, include any custom field values in the `$_POST` array:

`$_POST["field"] = array("%PERS_1%,0" => "Custom field value");`

The custom field value could be part of the HTML form, or hard-coded in your script (where subscribers don't see it).

If you are using Ajax to submit the form, update the URL in the jQuery section:

<pre>
geturl = $j.ajax({
  url: '', // the URL to this page.
</pre>

## Documentation and Links

* [Full API documentation](http://activecampaign.com/api)
* [Blog post: Advanced Subscription Form Integration](http://www.activecampaign.com/blog/advanced-subscription-form-integration/)

## Reporting Issues

We'd love to help if you have questions or problems. Report issues using the [Github Issue Tracker](https://github.com/ActiveCampaign/example-subscription_form_embed/issues) or email help@activecampaign.com.