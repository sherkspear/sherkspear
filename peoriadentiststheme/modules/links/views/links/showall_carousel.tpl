{*
 * Copyright (c) 2007-2008 OIC Group, Inc.
 * Written and Designed by Adam Kessler
 *
 * This file is part of Exponent
 *
 * Exponent is free software; you can redistribute
 * it and/or modify it under the terms of the GNU
 * General Public License as published by the Free
 * Software Foundation; either version 2 of the
 * License, or (at your option) any later version.
 *
 * GPL: http://www.gnu.org/licenses/gpl.txt
 *
 *}
 
<div class="module links showall-homepageCarousel">
    <div id="sponsors" class="{if ($items|@count < 4)}noCarousel{else}yui-carousel{/if}">
    <ol>
        {foreach name=items from=$items item=item}
        	{counter assign=numOfItems}
        <li class="item{permissions level=$smarty.const.UILEVEL_NORMAL} editing{/permissions}" style="height:85px">
            {permissions}
                <div class="item-actions">
                {if $permissions.edit == 1}
                    {icon controller=links action=edit id=$item->id title="Edit this `$modelname`"}
                {/if}
                {if $permissions.delete == 1}
                    {icon controller=links action=delete id=$item->id title="Delete this `$modelname`" onclick="return confirm('Are you sure you want to delete this `$modelname`?');"}
                {/if}
                </div>
            {/permissions}
			<h2><a class="li-link" {if $item->new_window}target="_blank"{/if} href="{$item->url}">{$item->title}</a></h2>
            <div class="c-img">
				<a class="li-link" {if $item->new_window}target="_blank"{/if} href="{$item->url}">{img file_id=$item->expFile[0]->id width=150 constrain=1 style="text-align:center; height:75px"}</a>
            </div>
                

        </li>
        {/foreach}
    </ol>
    </div>
    {permissions level=$smarty.const.UILEVEL_NORMAL}
        {if $permissions.create == 1 || $permissions.edit == 1}
            {icon controller=links class="add" action=create text="Create new link" title="Add another Member"}{br}
            {ddrerank label="Links" items=$items}
        {/if}
    {/permissions}
</div>
{if ($items|@count > 3)}
{script unique="spcarousel" yuimodules="carousel,animation"}
{literal}

(function () {
    var carousel;
            
    var carousel = new YAHOO.widget. Carousel( "sponsors" , { 
        animation: { speed: 0.5 }, 
		autoPlayInterval: 5000, 
		isCircular: true 
	});
    
    carousel.render(); // get ready for rendering the widget
    carousel.show();   // display the widget
    carousel.startAutoPlay();
})();

{/literal}
{/script}
{/if}