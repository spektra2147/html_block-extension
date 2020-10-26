<?php namespace Anomaly\HtmlBlockExtension\Block;

use Anomaly\HtmlBlockExtension\Block\Contract\BlockInterface;
use Anomaly\Streams\Platform\Model\HtmlBlock\HtmlBlockBlocksEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlockModel extends HtmlBlockBlocksEntryModel implements BlockInterface
{
    use HasFactory;
}
