<?php 

namespace SendGrid;

class AppFilters
{

  private $mail;

  const GRAVATAR = "gravatar";
  const OPENTRACKING = "opentrack";
  const CLICKTRACKING = "clicktrack";
  const SPAMCHECK = "spamcheck";
  const UNSUBSCRIBE = "subscriptiontrack";
  const FOOTER = "footer";
  const GOOGLEANALYTICS = "ganalytics";
  const TEMPLATE = "template";
  const BCC = "bcc";
  const BYPASSLISTMANAGEMENT = "bypass_list_management";

  public function __construct(Mail $mail)
  {
    $this->mail = $mail;
  }

  /**
   * end
   * return the Mail object, so that
   * the mail object can further be modified
   */
  public function end()
  {
    return $this->mail;
  }

  /**
   * disableGravater
   * disables the gravatar app
   * @return the AppFilter object
   */
  public function disableGravatar()
  {
    $this->mail->addFilterSetting($this::GRAVATAR, "enable", 0);
    return $this; 
  }

  /**
   * disableOpenTracking
   * disables the open tracking app
   * @return the AppFilterObject
   */
  public function disableOpenTracking()
  {
    $this->mail->addFilterSetting($this::OPENTRACKING, "enable", 0);
    return $this;
  }

  /**
   * disableClickTracking
   * disables click tracking
   * @return the AppFilterObject
   */
  public function disableClickTracking()
  {
    $this->mail->addFilterSetting($this::CLICKTRACKING, "enable", 0);
    return $this;
  }

    /**
   * disableSpamCheck
   * disables the Spam Check
   * @return the AppFilterObject
   */
  public function disableSpamCheck()
  {
    $this->mail->addFilterSetting($this::SPAMCHECK, "enable", 0);
    return $this;
  }
    /**
   * disableUnsubscribe
   * disables the Unsubscribe filter
   * @return the AppFilterObject
   */
  public function disableUnsubscribe()
  {
    $this->mail->addFilterSetting($this::UNSUBSCRIBE, "enable", 0);
    return $this;
  }
    /**
   * disableFooter
   * disables the Footer filter
   * @return the AppFilterObject
   */
  public function disableFooter()
  {
    $this->mail->addFilterSetting($this::FOOTER, "enable", 0);
    return $this;
  }
    /**
   * disableGoogleAnalytics
   * disables the google analytics filter
   * @return the AppFilterObject
   */
  public function disableGoogleAnalytics()
  {
    $this->mail->addFilterSetting($this::GOOGLEANALYTICS, "enable", 0);
    return $this;
  }
    /**
   * disableTemplate
   * disables the Template filter
   * @return the AppFilterObject
   */
  public function disableTemplate()
  {
    $this->mail->addFilterSetting($this::TEMPLATE, "enable", 0);
    return $this;
  }
    /**
   * disableBcc
   * disables the BCC Filter
   * @return the AppFilterObject
   */
  public function disableBcc()
  {
    $this->mail->addFilterSetting($this::BCC, "enable", 0);
    return $this;
  }
    /**
   * disableBypassListManagement
   * disables the Bypass List Management filter
   * @return the AppFilterObject
   */
  public function disableBypassListManagement()
  {
    $this->mail->addFilterSetting($this::BYPASSLISTMANAGEMENT, "enable", 0);
    return $this;
  }
}