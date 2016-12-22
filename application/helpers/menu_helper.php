<?
namespace Helper\Menu;

function current($item)
{
    $ci =& get_instance();
    $current = $ci->uri->segment(1);
    if ($current == $item) return "selected";
}