<?php
namespace GDO\YTBest;

use GDO\Votes\GDO_VoteTable;

/**
 *
 * @author gizmore
 *
 */
final class YT_VideoVote extends GDO_VoteTable
{

	public function gdoVoteObjectTable()
	{
		return YT_Video::table();
	}

}
