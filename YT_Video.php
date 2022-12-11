<?php
namespace GDO\YTBest;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;
use GDO\Votes\WithVotes;
use GDO\Comments\CommentedObject;
use GDO\Core\GDT_Object;
use GDO\YouTube\GDO_YTVideo;
use GDO\User\GDO_User;

/**
 *
 * @author gizmore
 *        
 */
final class YT_Video extends GDO
{

	# ############
	# ## Votes ###
	# ############
	use WithVotes;

	public function gdoVoteTable()
	{
		return YT_VideoVote::table();
	}

	# ###############
	# ## Comments ###
	# ###############
	use CommentedObject;

	public function gdoCommentTable()
	{
		return YT_VideoComment::table();
	}

	# Really abstract
	public function gdoCommentsEnabled()
	{
		return true;
	}

	# default true would be ok
	public function gdoCanComment(GDO_User $user)
	{
		return true;
	}

	# default true would be ok
	public function gdoCommentHrefEdit()
	{
		return href('Comments', 'Edit');
	}

	# ##########
	# ## GDO ###
	# ##########
	public function gdoColumns(): array
	{
		return [
			GDT_AutoInc::make('ytv_id'),
			GDT_Object::make('ytv_video')->table(GDO_YTVideo::table())->notNull(),
		];
	}

}
