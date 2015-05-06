<?php

namespace CRM\Lib\Docflow\Model;

class Document
{
    // Статусы документа
    const STATUS_UNKNOWN = -1;
    const STATUS_NOT_FOUND = 0;
    const STATUS_REJECTED = 1;
    const STATUS_SIGNED  = 2;
    const STATUS_SENT = 3;
    const STATUS_NOT_SENT = 4;

    // Типы документа
    const UnknownDocumentType = -1;
    const Nonformalized = 0;
    const Invoice = 1;
    const TrustConnectionRequest = 11;
    const Torg12 = 12;
    const InvoiceRevision = 13;
    const InvoiceCorrection = 14;
    const InvoiceCorrectionRevision = 15;
    const AcceptanceCertificate = 16;
    const ProformaInvoice = 18;
    const XmlTorg12 = 19;
    const XmlAcceptanceCertificate = 20;
    const PriceList = 26;
    const PriceListAgreement = 30;
    const CertificateRegistry = 34;
    const ReconciliationAct = 35;
    const Contract = 36;
    const Torg13 = 37;
    const ServiceDetails = 38;

    private static $type = array(
        self::UnknownDocumentType       => 'Неизвестный тип документа',
        self::Nonformalized             => 'Неформализованный документ.',
        self::Invoice                   => 'Счет-фактура',
        self::Torg12                    => 'Товарная накладная ТОРГ-12',
        self::InvoiceRevision           => 'Исправление счета-фактуры',
        self::InvoiceCorrection         => 'Корректировочный счет-фактура',
        self::InvoiceCorrectionRevision => 'Исправление корректировочного счета-фактуры',
        self::AcceptanceCertificate     => 'Акт о выполении работ / оказании услуг',
        self::ProformaInvoice           => 'Счет на оплату',
        self::XmlTorg12                 => 'Товарная накладная ТОРГ-12 в XML-формате',
        self::XmlAcceptanceCertificate  => 'Акт о выполении работ / оказании услуг в XML-формате',
        self::PriceList                 => 'Ценовой лист',
        self::PriceListAgreement        => 'Протокол согласования цены',
        self::CertificateRegistry       => 'Реестр сертификатов',
        self::ReconciliationAct         => 'Акт сверки',
        self::Contract                  => 'Договор',
        self::Torg13                    => 'Накладная ТОРГ-13',
        self::ServiceDetails            => 'Детализация',
    );

    private static $status = array(
        self::STATUS_NOT_FOUND => 'Нет документа',
        self::STATUS_REJECTED => 'Отказ подписи',
        self::STATUS_SIGNED  => 'Подписано',
        self::STATUS_SENT => 'Отправлен',
        self::STATUS_NOT_SENT => 'Не отправлен',
        self::STATUS_UNKNOWN => 'Ошибка статуса'
    );

    protected $id;

    protected $number;

    protected $title;

    /** @var \DateTime */
    protected $date;

    protected $typeId;

    protected $statusId = self::STATUS_UNKNOWN;

    protected $packetId;

    protected $url;

    /** @var \DateTime */
    protected $signedAt;

    /** @var \DateTime */
    protected $sentAt;

    /** @var \DateTime */
    protected $createdAt;

    /** @var \DateTime */
    protected $updatedAt;

    function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     *
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     *
     * @param mixed $typeId
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
    }

    /**
     * @return mixed
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     *
     * @param mixed $statusId
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     *
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     *
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = new \DateTime($date);
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     *
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getPacketId()
    {
        return $this->packetId;
    }

    /**
     *
     * @param mixed $packetId
     */
    public function setPacketId($packetId)
    {
        $this->packetId = $packetId;
    }

    /**
     * @param int $typeId
     * @return string
     */
    public function getType($typeId = null)
    {
        $typeId = $typeId === null ? $this->getTypeId() : $typeId;
        if (!isset(self::$type[$typeId])) {
            return self::$type[-1];
        }

        return self::$type[$typeId];
    }

    /**
     * @param int|null $statusId
     * @return string
     */
    public function getStatus($statusId = null)
    {
        $statusId = $statusId === null ? $this->getStatusId() : $statusId;
        if (!isset(self::$status[$statusId])) {
            return self::$status[-1];
        }

        return self::$status[$statusId];
    }

    /**
     * @return \DateTime
     */
    public function getSignedAt()
    {
        return $this->signedAt;
    }

    /**
     *
     * @param \DateTime $signedAt
     */
    public function setSignedAt($signedAt)
    {
        $this->signedAt = $signedAt;
    }

    /**
     * @return \DateTime
     */
    public function getSentAt()
    {
        return $this->sentAt;
    }

    /**
     *
     * @param \DateTime $sentAt
     */
    public function setSentAt($sentAt)
    {
        $this->sentAt = $sentAt;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     *
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}

/*============================================================================*
 *  END OF Document                                                           *
 *=========================================================================}}}*/
/*============================================================================*
 * vim: set expandtab tabstop=3 shiftwidth=3 foldmethod=marker:               *
 *   END OF FILE                                                              *
 *============================================================================*/