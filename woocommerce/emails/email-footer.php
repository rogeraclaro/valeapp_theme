<?php
/**
 * Email Footer
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-footer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 7.4.0
 */

defined( 'ABSPATH' ) || exit;
?>
</div>
</td>
</tr>
</table>
<!-- End Content -->
</td>
</tr>
</table>
<!-- End Body -->
</td>
</tr>
</table>
</td>
</tr>
<tr>
  <td align="center" valign="top">
    <!-- Footer -->
    <table border="0" cellpadding="10" cellspacing="0" width="100%" id="template_footer"
      style="background-color: #57aa9e; border-top: 1px solid #dddddd; padding-top: 20px; text-align: center;">
      <tr>
        <td valign="top" style="padding: 20px 0;">
          <table border="0" cellpadding="10" cellspacing="0" width="100%">
            <tr>
              <td valign="middle" style="text-align: center;">
                <img src="https://www.valedichoyhecho.com/wp-content/uploads/2024/08/Mail-verificacion.png"
                  alt="Logo Vale" width="100" height="auto" style="margin-bottom: 20px;">
              </td>
            </tr>
            <tr>
              <td valign="middle" style="text-align: center;">
                <a href="https://facebook.com" style="text-decoration: none; margin: 0 10px;">
                  <img src="https://www.valedichoyhecho.com/wp-content/uploads/2024/08/Facebook.png" alt="Facebook"
                    width="24" height="auto" />
                </a>
                <a href="https://instagram.com" style="text-decoration: none; margin: 0 10px;">
                  <img src="https://www.valedichoyhecho.com/wp-content/uploads/2024/08/Instagram.png" alt="Instagram"
                    width="24" height="auto" />
                </a>
                <a href="https://linkedin.com" style="text-decoration: none; margin: 0 10px;">
                  <img src="https://www.valedichoyhecho.com/wp-content/uploads/2024/08/Linkedin.png" alt="Linkedin"
                    width="24" height="auto" />
                </a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- <tr>
        <td valign="top">
          <table border="0" cellpadding="10" cellspacing="0" width="100%">
            <tr>
              <td colspan="2" valign="middle" id="credit">
                <?php
                            echo wp_kses_post(
                                wpautop(
                                    wptexturize(
                                        apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) )
                                    )
                                )
                            );
                            ?>
              </td>
            </tr>
          </table>
        </td>
      </tr> -->
    </table>
    <!-- End Footer -->
  </td>
</tr>
</table>
</div>
</td>
<td>
  <!-- Deliberately empty to support consistent sizing and layout across multiple email clients. -->
</td>
</tr>
</table>
</body>

</html>