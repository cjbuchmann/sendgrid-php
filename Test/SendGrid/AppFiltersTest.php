<?php 

class AppFiltersTest extends PHPUnit_Framework_TestCase
{

  public function testGravatar()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableGravatar();

    $this->assertEquals("{\"filters\":{\"gravatar\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testOpenTracking()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableOpenTracking();

    $this->assertEquals("{\"filters\":{\"opentrack\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testClickTracking()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableClickTracking();

    $this->assertEquals("{\"filters\":{\"clicktrack\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testSpamCheck()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableSpamCheck();

    $this->assertEquals("{\"filters\":{\"spamcheck\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testUnsubscribe()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableUnsubscribe();

    $this->assertEquals("{\"filters\":{\"subscriptiontrack\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testFooter()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableFooter();

    $this->assertEquals("{\"filters\":{\"footer\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testGoogleAnalytics()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableGoogleAnalytics();

    $this->assertEquals("{\"filters\":{\"ganalytics\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testTemplate()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableTemplate();

    $this->assertEquals("{\"filters\":{\"template\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testBcc()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableBcc();

    $this->assertEquals("{\"filters\":{\"bcc\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testBypassListManagement()
  {
    $message = new SendGrid\Mail();

    $message->
      apps->
        disableBypassListManagement();

    $this->assertEquals("{\"filters\":{\"bypass_list_management\":{\"settings\":{\"enable\":0}}}}", $message->getHeadersJson());
  }

  public function testEnd()
  {
    $message = new SendGrid\Mail();

    $object = $message->
      apps->
        disableGravatar()->
      end();

    $this->assertEquals($message, $object);
  }

  public function testComplexExamples()
  {
    $message = new SendGrid\Mail();

    $message->
      addCategory("Category_1")->
      addCategory("Category_2")->
      addCategory("Category_3")->
      addFilterSetting("custom_filter", "setting_key", "setting_val")->
      addFilterSetting("custom_filter", "setting_key_2", "setting_val_2")->
      addFilterSetting("custom_filter_2", "setting_key", "setting_val")->
      apps->
        disableGravatar()->
        disableOpenTracking()->
        disableTemplate()->
        disableFooter()->
        disableUnsubscribe()->
        disableBypassListManagement()->
      end()->
      addTo("foo@bar.com")->
      setFrom("raz@foo.com")->
      setSubject("Foo Message");

    $this->assertEquals("{\"category\":[\"Category_1\",\"Category_2\",\"Category_3\"],\"filters\":{\"custom_filter\"" . 
      ":{\"settings\":{\"setting_key\":\"setting_val\",\"setting_key_2\":\"setting_val_2\"}},\"custom_filter_2\":{\"" .
      "settings\":{\"setting_key\":\"setting_val\"}},\"gravatar\":{\"settings\":{\"enable\":0}},\"opentrack\":{\"" .
      "settings\":{\"enable\":0}},\"template\":{\"settings\":{\"enable\":0}},\"footer\":{\"settings\":{\"enable\"" .
      ":0}},\"subscriptiontrack\":{\"settings\":{\"enable\":0}},\"bypass_list_management\":{\"settings\":{\"enable\"" .
      ":0}}}}", $message->getHeadersJson());
  }
}