<?php

namespace QBNK\QBank\API\Model;

use DateTime;

    class Comment  implements \JsonSerializable
    {
    /** @var int Id of the comment */
    protected $id;

    /** @var int Object that this comment is made on */
    protected $object_id;

    /** @var int The QBank user that wrote this comment */
    protected $created_by;

    /** @var DateTime Time this comment was made */
    protected $created;

    /** @var string The actual comment */
    protected $comment;

    /** @var int If a reply, indicates this comments parent */
    protected $parent_id;

    /** @var string Set only if a anonymoous user wrote this comment, see created_by otherwise */
    protected $user_name;

    /** @var string Set only if a anonymoous user wrote this comment, see created_by otherwise */
    protected $user_email;

    /** @var Comment[] A array of eventual replies to this comment */
    protected $replies;

    /**
     * Constructs a Comment.
     *
     * @param array $parameters An array of parameters to initialize the { @link Comment } with.
     * - <b>id</b> - Id of the comment
     * - <b>object_id</b> - Object that this comment is made on
     * - <b>created_by</b> - The QBank user that wrote this comment
     * - <b>created</b> - Time this comment was made
     * - <b>comment</b> - The actual comment
     * - <b>parent_id</b> - If a reply, indicates this comments parent
     * - <b>user_name</b> - Set only if a anonymoous user wrote this comment, see created_by otherwise
     * - <b>user_email</b> - Set only if a anonymoous user wrote this comment, see created_by otherwise
     * - <b>replies</b> - A array of eventual replies to this comment
     */
    public function __construct($parameters = [])
    {
        $this->replies = [];

        if (isset($parameters['id'])) {
            $this->setId($parameters['id']);
        }
        if (isset($parameters['object_id'])) {
            $this->setObject_id($parameters['object_id']);
        }
        if (isset($parameters['created_by'])) {
            $this->setCreated_by($parameters['created_by']);
        }
        if (isset($parameters['created'])) {
            $this->setCreated($parameters['created']);
        }
        if (isset($parameters['comment'])) {
            $this->setComment($parameters['comment']);
        }
        if (isset($parameters['parent_id'])) {
            $this->setParent_id($parameters['parent_id']);
        }
        if (isset($parameters['user_name'])) {
            $this->setUser_name($parameters['user_name']);
        }
        if (isset($parameters['user_email'])) {
            $this->setUser_email($parameters['user_email']);
        }
        if (isset($parameters['replies'])) {
            $this->setReplies($parameters['replies']);
        }
    }

    /**
     * Gets the id of the Comment.
     * @return int	 */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the "id" of the Comment.
     *
     * @param int $id
     *
     * @return Comment
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Gets the object_id of the Comment.
     * @return int	 */
    public function getObject_id()
    {
        return $this->object_id;
    }

    /**
     * Sets the "object_id" of the Comment.
     *
     * @param int $object_id
     *
     * @return Comment
     */
    public function setObject_id($object_id)
    {
        $this->object_id = $object_id;

        return $this;
    }
    /**
     * Gets the created_by of the Comment.
     * @return int	 */
    public function getCreated_by()
    {
        return $this->created_by;
    }

    /**
     * Sets the "created_by" of the Comment.
     *
     * @param int $created_by
     *
     * @return Comment
     */
    public function setCreated_by($created_by)
    {
        $this->created_by = $created_by;

        return $this;
    }
    /**
     * Gets the created of the Comment.
     * @return DateTime	 */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets the "created" of the Comment.
     *
     * @param DateTime $created
     *
     * @return Comment
     */
    public function setCreated($created)
    {
        if ($created instanceof DateTime) {
            $this->created = $created;
        } else {
            try {
                $this->created = new DateTime($created);
            } catch (\Exception $e) {
                $this->created = null;
            }
        }

        return $this;
    }
    /**
     * Gets the comment of the Comment.
     * @return string	 */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the "comment" of the Comment.
     *
     * @param string $comment
     *
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }
    /**
     * Gets the parent_id of the Comment.
     * @return int	 */
    public function getParent_id()
    {
        return $this->parent_id;
    }

    /**
     * Sets the "parent_id" of the Comment.
     *
     * @param int $parent_id
     *
     * @return Comment
     */
    public function setParent_id($parent_id)
    {
        $this->parent_id = $parent_id;

        return $this;
    }
    /**
     * Gets the user_name of the Comment.
     * @return string	 */
    public function getUser_name()
    {
        return $this->user_name;
    }

    /**
     * Sets the "user_name" of the Comment.
     *
     * @param string $user_name
     *
     * @return Comment
     */
    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }
    /**
     * Gets the user_email of the Comment.
     * @return string	 */
    public function getUser_email()
    {
        return $this->user_email;
    }

    /**
     * Sets the "user_email" of the Comment.
     *
     * @param string $user_email
     *
     * @return Comment
     */
    public function setUser_email($user_email)
    {
        $this->user_email = $user_email;

        return $this;
    }
    /**
     * Gets the replies of the Comment.
     * @return Comment[]	 */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Sets the "replies" of the Comment.
     *
     * @param Comment[] $replies
     *
     * @return Comment
     */
    public function setReplies(array $replies)
    {
        $this->replies = [];

        foreach ($replies as $item) {
            $this->addComment($item);
        }

        return $this;
    }

    /**
     * Adds an object of "Replies" of the Comment.
     *
     * @param Comment|array $item
     *
     * @return Comment
     */
    public function addComment($item)
    {
        if (!($item instanceof self)) {
            if (is_array($item)) {
                try {
                    $item = new self($item);
                } catch (\Exception $e) {
                    trigger_error('Could not auto-instantiate Comment. '.$e->getMessage(), E_USER_WARNING);
                }
            } else {
                trigger_error('Array parameter item is not of expected type "Comment"!', E_USER_WARNING);
            }
        }
        $this->replies[] = $item;

        return $this;
    }

    /**
     * Gets all data that should be available in a json representation.
     *
     * @return array An associative array of the available variables.
     */
    public function jsonSerialize()
    {
        $json = [];

        if ($this->id !== null) {
            $json['id'] = $this->id;
        }
        if ($this->object_id !== null) {
            $json['object_id'] = $this->object_id;
        }
        if ($this->created_by !== null) {
            $json['created_by'] = $this->created_by;
        }
        if ($this->created !== null) {
            $json['created'] = $this->created->format(\DateTime::ISO8601);
        }
        if ($this->comment !== null) {
            $json['comment'] = $this->comment;
        }
        if ($this->parent_id !== null) {
            $json['parent_id'] = $this->parent_id;
        }
        if ($this->user_name !== null) {
            $json['user_name'] = $this->user_name;
        }
        if ($this->user_email !== null) {
            $json['user_email'] = $this->user_email;
        }
        if ($this->replies !== null && !empty($this->replies)) {
            $json['replies'] = $this->replies;
        }

        return $json;
    }
    }
