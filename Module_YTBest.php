<?php
namespace GDO\YTBest;

use GDO\Core\GDO_Module;

/**
 * Global Rating of youtube videos.
 * Comments proxy for comments disabled.
 * 
 * @author gizmore
 * @version 7.0.1
 * @since 7.0.1
 */
final class Module_YTBest extends GDO_Module
{
	
	public int $priority = 150;
	
	public function isSiteModule(): bool
	{
		return true;
	}
	
	public function getDependencies(): array
	{
		return [
			'Admin',
			'Classic',
			'Comments',
			'Login',
			'Recovery',
			'Register',
			'Votes',
			'YouTube',
		];
	}
	
	public function getClasses(): array
	{
		return [
			YT_Video::class,
			YT_VideoComment::class,
			YT_VideoVote::class,
		];
	}
	
	
	
}
