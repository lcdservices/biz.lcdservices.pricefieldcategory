<table>
  <tr id="price_field_category" class="crm-price-field-form-block-price_field_category">
    <td class="label">
      {$form.price_field_category.label}
    </td>
    <td>
      {$form.price_field_category.html}
    </td>
  </tr>
</table>

{literal}
<script type="text/javascript">
  CRM.$(function($) {
    $('tr.crm-price-field-form-block-label').after($('tr#price_field_category'));
  });
</script>
{/literal}
